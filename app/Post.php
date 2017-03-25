<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

	public function user()
	{
		return $this->belongsTo(User::class);
	}
    public function forum()
    {
    	return $this->belongsTo(Forum::class);
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
