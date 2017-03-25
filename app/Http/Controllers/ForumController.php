<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
    	// $forums = Forum::all();
    	$forums = \App\Forum::get();
    	return view('forums.index', compact('forums'));
    }

    public function show()
    {
    	$forum = \App\Forum::first();
    	$forum->load('user');
    	$title = $forum->title;
    	return view('forums.show', compact('title', 'forum'));
    	// return view('forums.show', compact('forum'));
    }
}
