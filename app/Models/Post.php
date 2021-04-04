<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->morphToMany(\App\Models\Imageable::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(\App\Models\taggable::class, 'taggable');
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'post_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
