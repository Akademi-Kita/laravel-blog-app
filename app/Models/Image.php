<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tags()
    {
        return $this->morphToMany(\App\Models\Taggable::class, 'taggable');
    }

    public function posts()
    {
        return $this->morphedByMany(\App\Models\Post::class, 'imageable');
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
