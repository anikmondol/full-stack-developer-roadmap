<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //

    protected $guarded = [];

    protected $casts = [
        "meta_data" => 'json',
        // "meta_data" => AsArrayObject::class,
    ];

}
