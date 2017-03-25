<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('/newForum');

Route::get('/forumTest', 'ForumController@index');

Route::get('/forum/{title}', 'ForumController@show');

Route::get('{user}/friends', 'FriendsController@index');
