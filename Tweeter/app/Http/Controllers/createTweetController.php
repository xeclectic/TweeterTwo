<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class createTweetController extends Controller
{
    function createTweet(Request $request) {
        if(Auth::check()){
            $tweet = new \App\Tweet;
            $tweet->user_id = $request->user_id;
            $tweet->content = $request->content;
            print_r($tweet);

           // $tweet->save();

            $result = \App\Tweet::all();

           // return view('newsfeed', ['tweets' => $result]);
        //}else{
            //return view('newsfeed');
        }
    }
}
