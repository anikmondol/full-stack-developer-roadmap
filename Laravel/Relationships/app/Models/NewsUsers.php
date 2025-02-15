<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsUsers extends Model
{

    protected $guarded = [];
    // Allow mass assignment for all fields (if needed)


    // Define the inverse relationship (a user has many posts)
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id'); // Foreign key 'user_id'
    }

}
