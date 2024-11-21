<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageMetadata extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'is_used',
        'portfolio_id',
        'blog_id'
    ];
}
