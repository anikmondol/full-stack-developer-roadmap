<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $guarded = [];
    public $timestamps = false;


    public function commentable(){
        return $this->morphTo();
    }

}
