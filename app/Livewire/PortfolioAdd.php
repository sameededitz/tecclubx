<?php

namespace App\Livewire;

use App\Models\ImageMetadata;
use App\Models\Portfolio;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioAdd extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $category;
    public $date;
    public $cover;
    public $preview;
    public $thumbnail;

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
            'cover' => 'required|image|max:20048|mimes:jpeg,png,jpg',
            'preview' => 'required|image|max:20048|mimes:jpeg,png,jpg',
            'thumbnail' => 'required|image|max:20048|mimes:jpeg,png,jpg',
        ];
    }

    public function submit()
    {
        // dd($this->description);
        $this->validate();
        $portfolio = Portfolio::create([
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date,
            'category' => $this->category
        ]);
        if ($this->cover) {
            $portfolio->addMedia($this->cover->getRealPath())
                ->usingFileName($this->cover->getClientOriginalName())
                ->toMediaCollection('cover');
        }
        if ($this->preview) {
            $portfolio->addMedia($this->preview->getRealPath())
                ->usingFileName($this->preview->getClientOriginalName())
                ->toMediaCollection('preview');
        }
        if ($this->thumbnail) {
            $portfolio->addMedia($this->thumbnail->getRealPath())
                ->usingFileName($this->thumbnail->getClientOriginalName())
                ->toMediaCollection('thumbnail');
        }

        $this->updateImg($portfolio);

        return redirect()->route('all-portfolio')->with([
            'status' => 'success',
            'message' => 'Portfolio created successfully',
        ]);
    }

    private function updateImg($portfolio)
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        // Extract image file names from description
        preg_match_all('/src="' . preg_quote($baseUrl, '/') . '\/portfolio\/([^"]+)"/', $portfolio->description, $matches);
        $imageFiles = $matches[1] ?? [];

        // Update the image metadata for each image file name
        foreach ($imageFiles as $fileName) {
            ImageMetadata::where('path', $fileName)->update(['is_used' => true, 'portfolio_id' => $portfolio->id]);
        }
        return true;
    }

    public function render()
    {
        return view('livewire.portfolio-add');
    }
}
