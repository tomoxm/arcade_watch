<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    /**
     * Get the author of the blog post.
     */
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the comments of this post.
     */
    public function comments() 
    {
        return $this->hasMany('App\Models\Comment');
    }

}