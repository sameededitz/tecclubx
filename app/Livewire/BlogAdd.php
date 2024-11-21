<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ImageMetadata;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogAdd extends Component
{
    use WithFileUploads;

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

    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tag' => 'required|array',
            'tag.*' => 'exists:tags,id',
            'thumbnail' => 'required|image|max:20048|mimes:jpeg,png,jpg',
        ];
    }

    public function submit()
    {
        $this->validate();

        $post = Post::create([
            'title' => $this->title,
            'body' => $this->description,
            'author_id' => Auth::id(),
            'category_id' => $this->category_id,
            'is_published' => $this->is_published,
            'published_at' => $this->is_published ? now() : null,
        ]);

        $post->tags()->sync($this->tag);

        if ($this->thumbnail) {
            $post->addMedia($this->thumbnail->getRealPath())
                ->usingFileName($this->thumbnail->getClientOriginalName())
                ->toMediaCollection('thumbnail');
        }
        $this->updateImg($post);

        return redirect()->route('all-blogs')->with([
            'status' => 'success',
            'message' => 'Blog added successfully',
        ]);
    }

    private function updateImg($post)
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        // Extract image file names from description
        preg_match_all('/src="' . preg_quote($baseUrl, '/') . '\/portfolio\/([^"]+)"/', $post->description, $matches);
        $imageFiles = $matches[1] ?? [];

        // Update the image metadata for each image file name
        foreach ($imageFiles as $fileName) {
            ImageMetadata::where('path', $fileName)->update(['is_used' => true, 'blog_id' => $post->id]);
        }
        return true;
    }

    public function render()
    {
        return view('livewire.blog-add');
    }
}
