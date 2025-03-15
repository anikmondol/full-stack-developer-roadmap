<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //


    // protected $guarded = [];

    // public function user(){
    //     return $this->belongsTo(Post::class);
    // }

    // public function scopeActive($query){
    //     return $query->where('status', 1);
    // }


    public function user(){
        return $this->belongsTo(User::class);
    }

}
