<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // Allow mass assignment for all fields (if needed)
   protected $guarded = [];

   // Define the relationship with NewsUsers (a post belongs to one user)
   public function user()
   {
       return $this->belongsTo(NewsUsers::class, 'user_id'); // Foreign key 'user_id'
   }

}
