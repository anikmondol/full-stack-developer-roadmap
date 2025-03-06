<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //


    public function company(){
        return $this->hasOne(Company::class);
    }

    public function phoneNumber(){
       return $this->hasOneThrough(Phone_number::class,Company::class);
    }

}
