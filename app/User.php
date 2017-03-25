<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'number_of_posts', 'interests',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function friends()
    {
        return $this->hasMany(User::class);
    }

    public function interests()
    {
        return $this->hasMany(Category::class);
    }

    public function addForum($title, $post, $category)
    {
        $forum = new \App\Forum();
        $forum->title = $title;
        $forum->main_post = $post;
        $forum->score = 0;
        $forum->number_of_posts = 0;
        $forum->category = Category::where('id', $category)->get();
        return $this->forums()->save($forum);
    }

    public function addFriend(User $friend)
    {
        return $this->friends()->save($friend);
    }

    public function addInterest(Category $interest)
    {
        return $this->interests()->save($interest);
    }
}
