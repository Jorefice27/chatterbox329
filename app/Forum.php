<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Forum extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function posts()
    {
    	return $this->hasMany(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function addPost(Request $request)
    {
    	$post = new \App\Post();
    	$request->user()->posts()->save($post);
    	return $this->posts()->save($post);
    }
}
