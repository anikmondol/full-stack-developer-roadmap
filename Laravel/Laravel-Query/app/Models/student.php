<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public $timestamp = false;

    protected $fillable = ['name', 'email', 'age', 'city'];

    
}


