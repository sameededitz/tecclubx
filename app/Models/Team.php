<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'profession',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'github',
        'discord',
        'youtube',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('team_info')
            ->useDisk('media')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/bmp']);
    }
}
