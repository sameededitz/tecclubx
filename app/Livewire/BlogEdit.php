<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ImageMetadata;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogEdit extends Component
{
    use WithFileUploads;

    public $post;
    public $thumbnail;
    public $title;
    public $description;
    public $category_id;
    public $tag = [];
    public $categories;
    public $tags;
    public $is_published = false;

    #[On('updateTag')]
    public function updateTag($tag)
    {
        $this->tag = array_unique((array) $tag);
    }

    public function mount(Post $post)
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();

        $this->post = $post;
        $this->title = $post->title;
        $this->description = $post->body;
        $this->category_id = $post->category_id;
        $this->is_published = $post->is_published;
        $this->tag = $post->tags->pluck('id')->toArray();
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tag' => 'required|array',
            'tag.*' => 'exists:tags,id',
            'thumbnail' => 'nullable|image|max:20048|mimes:jpeg,png,jpg',
        ];
    }

    public function submit()
    {
        $this->validate();

        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        preg_match_all('/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/', $this->post->body, $oldImageMatches);
        $oldImagePaths = $oldImageMatches[1] ?? [];

        // Extract image paths from the new description (absolute and relative paths)
        preg_match_all('/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/', $this->description, $newImageMatches);
        $newImagePaths = $newImageMatches[1] ?? [];

        // Determine which images need to be deleted (present in old but not in new)
        $imagesToDelete = array_diff($oldImagePaths, $newImagePaths);

        foreach ($imagesToDelete as $image) {
            $imageMetadata = ImageMetadata::where('path', $image)
                ->where('blog_id', '<>', $this->post->id)
                ->exists();

            if (!$imageMetadata) {
                // Delete from storage and metadata table
                Storage::disk('images')->delete($image);
                ImageMetadata::where('path', $image)->delete();
            }
        }

        $this->post->update([
            'title' => $this->title,
            'body' => $this->description,
            'category_id' => $this->category_id,
            'is_published' => $this->is_published,
            'published_at' => $this->is_published ? now() : null,
        ]);

        if ($this->thumbnail) {
            $this->post->clearMediaCollection('thumbnail');
            $this->post->addMedia($this->thumbnail->getRealPath())
                ->usingFileName($this->thumbnail->getClientOriginalName())
                ->toMediaCollection('thumbnail');
        }

        $this->post->tags()->sync($this->tag);

        $this->updateImg($this->post);

        return redirect()->route('all-blogs')->with([
            'status' => 'success',
            'message' => 'Blog updated successfully',
        ]);
    }

    private function updateImg($post)
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        // Extract image file names from description
        $regexPattern = '/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/';

        // Extract image file names from description
        preg_match_all($regexPattern, $post->body, $matches);
        $imageFiles = $matches[1] ?? [];

        // Update the image metadata for each image file name
        foreach ($imageFiles as $fileName) {
            ImageMetadata::where('path', $fileName)->update(['is_used' => true, 'blog_id' => $post->id]);
        }
        return true;
    }

    public function render()
    {
        return view('livewire.blog-edit');
    }
}
