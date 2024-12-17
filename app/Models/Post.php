<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model implements HasMedia
{
    use HasFactory, HasSlug, InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'body', 'author_id', 'category_id', 'is_published', 'published_at'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail')
            ->useDisk('media')
            ->singleFile();
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->deleteImagesInDescription();
        });
    }
    public function deleteImagesInDescription()
    {
        // Get the base URL from the environment variable
        $baseUrl = env('APP_URL', 'http://127.0.0.1:8000');
        // Extract image file names from description
        $regexPattern = '/src="(?:' . preg_quote($baseUrl, '/') . ')?\/?storage\/images\/([^"]+)"/';

        // Extract image file names from description
        preg_match_all($regexPattern, $this->body, $matches);
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
}
