<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Portfolio extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;

    protected $fillable = ['title', 'description', 'category', 'date', 'slug', 'order_column'];

    protected $casts = [
        'date' => 'datetime',
    ];

    // Default order by order_column
    protected static function booted()
    {
        static::addGlobalScope('ordered', function ($query) {
            $query->orderBy('order_column');
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
            ->useDisk('media')
            ->singleFile();

        $this->addMediaCollection('preview')
            ->useDisk('media')
            ->singleFile();

        $this->addMediaCollection('thumbnail')
            ->useDisk('media')
            ->singleFile();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
        ];
    }

    public function deleteImagesInDescription()
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        // Extract image file names from description
        $regexPattern = '/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/';

        // Extract image file names from description
        preg_match_all($regexPattern, $this->description, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $fileName) {

                // Delete image from storage
                if (Storage::disk('images')->exists($fileName)) {
                    Storage::disk('images')->delete($fileName);
                }
                // Delete image metadata record
                ImageMetadata::where('path', $fileName)->delete();
            }
        }
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($portfolio) {
            $portfolio->deleteImagesInDescription();
        });
    }
}
