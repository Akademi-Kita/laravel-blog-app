<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function posts()
    {
        return $this->morphedByMany(\App\Models\Post::class, 'taggable');
    }

    public function images()
    {
        return $this->morphedByMany(\App\Models\Image::class,  'taggable');
    }
}
