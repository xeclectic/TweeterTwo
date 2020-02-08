<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editTweetController extends Controller{
    public function editTweet($id){
        if(Auth::check()){
            $tweet = \App\Tweet::find($id);
            //$tweet ->id;

            return view('edit', ['tweets' => $tweet]);
        }
    }
}

