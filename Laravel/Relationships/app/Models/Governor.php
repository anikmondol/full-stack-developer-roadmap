<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governor extends Model
{
    //

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_role');
    }


}
