<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $guarded = [];


    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function latestComment(){
        return $this->morphOne(Comment::class, 'commentable')->latestOfMany();
    }

    public function oldestComment(){
        return $this->morphOne(Comment::class, 'commentable')->oldestOfMany();
    }

    public function BestComment(){
        return $this->morphOne(Comment::class, 'commentable')->ofMany('likes', 'min');
    }

    public function minComment(){
        return $this->morphOne(Comment::class, 'commentable')->ofMany('likes', 'mix');
    }


}
