<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class deleteTweetController extends Controller
{
    public function deleteTweet($id) {
        if(Auth::check()){
        $tweet = \App\Tweet::find($id);
        $tweet -> delete();

        $result = \App\Tweet::all();

        return view('newsfeed', ['tweets' => $result]);

        }else{
            return view('newsfeed');
        }

    }
}
