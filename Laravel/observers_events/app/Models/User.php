<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    public function post(){
        return $this->hasMany(Post::class);
    }

    protected static function booted(): void
    {

        // static::addGlobalScope('userdetail', function(Builder $builder){
        //     $builder->where('status', 1);
        // });

        static::addGlobalScope(new UserScope);

    }


    // public function scopeActive($query){
    //     return $query->where('status', 1);
    // }

    // public function scopeCity($query, $cityName){
    //     return $query->where('city', $cityName);
    // }

    public function scopeCity($query, $cityName){
        return $query->whereIn('city', $cityName);
    }

    public function scopeSort($query){
        return $query->OrderBy('name', 'DESC');
    }

}
