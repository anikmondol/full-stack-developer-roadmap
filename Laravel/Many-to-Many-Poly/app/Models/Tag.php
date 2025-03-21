<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $guarded = [];
    public $timestamps = false;


    public function posts(){
        return $this->morphedByMany(Post::class,'taggable');
    }


    public function videos(){
        return $this->morphedByMany(Video::class,'taggable');
    }

}
