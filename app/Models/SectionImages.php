<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SectionImages extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['section','file_name'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('section_img')
            ->useDisk('media')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/bmp']);
    }
}
