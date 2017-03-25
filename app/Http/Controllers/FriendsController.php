<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    
    public function index(Request $request)
    {
    	$user = $request->user();
    	$friends = $user->friends()->get();
    	return view('friends.index', compact('user', 'friends'));
    }
}
