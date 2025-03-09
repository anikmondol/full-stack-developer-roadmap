<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

// public function image(){
    //     return $this->morphOne(Image::class,'imageable');
    // }

    protected $guarded = [];

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

}
