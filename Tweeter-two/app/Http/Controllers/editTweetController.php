<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editTweetController extends Controller{
    public function editTweet(Request $request, $id){
        if(Auth::check()){
            $tweet = \App\Tweet::find($id);

            return view('edit', ['tweets' => $tweet]);
        }
    }
    public function updateTweet(Request $request, $id){
        if(Auth::check()){
            $tweet=\App\Tweet::find($id);
            $tweet->author = $request->name;
            $tweet->content = $request->content;

            $tweet->save();

            return redirect('/home');
        }
    }
}

