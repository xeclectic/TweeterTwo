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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'profileController@index');

/* Tweet endpoints */
Route::get('/', 'tweetController@show');
Route::post('/create', 'createTweetController@createTweet');
Route::get('/delete/{id}', 'deleteTweetController@deleteTweet');
Route::get('/editTweet/{id}', 'editTweetController@editTweet');

/* view endpoints */
Route::view('/edit', 'edit');
