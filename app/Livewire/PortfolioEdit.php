<?php

namespace App\Livewire;

use App\Models\ImageMetadata;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioEdit extends Component
{
    use WithFileUploads;
    public $portfolio;
    public $title;
    public $description;
    public $category;
    public $date;
    public $cover;
    public $preview;
    public $thumbnail;

    public function mount(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
        $this->title = $portfolio->title;
        $this->description = $portfolio->description;
        $this->category = $portfolio->category;
        $this->date = $portfolio->date ? $portfolio->date->format('Y-m-d') : null;
    }

    public function removeImage($field)
    {
        $this->$field = null;
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category' => 'required',
            'date' => 'required|date',
            'cover' => 'nullable|image|max:20048|mimes:jpeg,png,jpg',
            'preview' => 'nullable|image|max:20048|mimes:jpeg,png,jpg',
            'thumbnail' => 'nullable|image|max:20048|mimes:jpeg,png,jpg',
        ];
    }

    public function update()
    {
        $this->validate();

        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');

        // Extract image file names from the old description (absolute and relative paths)
        preg_match_all('/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/', $this->portfolio->description, $oldImageMatches);
        $oldImagePaths = $oldImageMatches[1] ?? [];

        // Extract image paths from the new description (absolute and relative paths)
        preg_match_all('/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/', $this->description, $newImageMatches);
        $newImagePaths = $newImageMatches[1] ?? [];

        // Determine which images need to be deleted (present in old but not in new)
        $imagesToDelete = array_diff($oldImagePaths, $newImagePaths);

        // Iterate through images to delete and remove from storage and metadata
        foreach ($imagesToDelete as $image) {
            $imageMetadata = ImageMetadata::where('path', $image)
                ->where('portfolio_id', '<>', $this->portfolio->id)
                ->exists();

            if (!$imageMetadata) {
                // Delete the image file from storage if no metadata exists
                Storage::disk('images')->delete($image);
                // Delete the image metadata
                ImageMetadata::where('path', $image)->delete();
            }
        }

        $this->portfolio->update([
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'date' => $this->date,
        ]);
        if ($this->cover) {
            $this->portfolio->clearMediaCollection('cover');
            $this->portfolio->addMedia($this->cover->getRealPath())
                ->usingFileName($this->cover->getClientOriginalName())
                ->toMediaCollection('cover');
        }
        if ($this->preview) {
            $this->portfolio->clearMediaCollection('preview');
            $this->portfolio->addMedia($this->preview->getRealPath())
                ->usingFileName($this->preview->getClientOriginalName())
                ->toMediaCollection('preview');
        }
        if ($this->thumbnail) {
            $this->portfolio->clearMediaCollection('thumbnail');
            $this->portfolio->addMedia($this->thumbnail->getRealPath())
                ->usingFileName($this->thumbnail->getClientOriginalName())
                ->toMediaCollection('thumbnail');
        }

        $this->updateImg($this->portfolio);

        $this->updateImg($this->portfolio);
        return redirect()->route('all-portfolio')->with([
            'status' => 'success',
            'message' => 'Portfolio updated successfully',
        ]);
    }


    private function updateImg($portfolio)
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');

        $regexPattern = '/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/';

        // Extract image file names from description
        preg_match_all($regexPattern, $portfolio->description, $matches);
        $imageFiles = $matches[1] ?? [];

        // Update the image metadata for each image file name
        foreach ($imageFiles as $fileName) {
            ImageMetadata::where('path', $fileName)->update(['is_used' => true, 'portfolio_id' => $portfolio->id]);
        }
        return true;
    }

    public function render()
    {
        return view('livewire.portfolio-edit');
    }
}
