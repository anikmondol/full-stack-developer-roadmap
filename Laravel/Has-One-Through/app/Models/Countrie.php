<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    //

    public function users(){
        return $this->hasOne(User::class, 'country_id','id' );
    }

    public function posts()
    {
        return $this->hasManyThrough(
            Post::class,
            User::class,
            'country_id',
            'user_id',
            'id',
            'id'
        );
    }


}
