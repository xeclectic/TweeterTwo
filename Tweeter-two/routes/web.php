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

Route::get('/home', 'HomeController@index')->name('newsfeed');
Route::get('/profile', 'profileController@index');

/* Tweet endpoints */
Route::get('/', 'tweetController@show');
Route::post('/create', 'createTweetController@createTweet');
Route::get('/delete/{id}', 'deleteTweetController@deleteTweet');
Route::get('/editTweet/{id}', 'editTweetController@editTweet');
Route::post('/updateTweet/{id}', 'editTweetController@updateTweet');
Route::get('/showUsers', 'showUsersController@showUsers');
Route::get('/viewTweet/{id}', 'tweetController@viewTweet');

/* Comment endpoints */
Route::post('/comment', 'createCommentController@createComment');
Route::get('/deleteComment/{id}', 'deleteCommentController@deleteComment');
Route::get('/editComment/{id}', 'editCommentController@editComment');
Route::post('/updateComment/{id}', 'editCommentController@updateComment');

/* Follow endpoints */
Route::post('/followUsers', 'showUsersController@followUser');
Route::post('/unfollow', 'showUsersController@unfollowUser');

/* Like endpoints */
Route::post('/likePost/{id}', 'likeController@likePost');

/* Profile endpoints */
Route::get('/editProfile', 'editProfileController@show');
Route::post('/updateBio', 'editProfileController@update');
