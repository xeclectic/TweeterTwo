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

        return redirect('/');

        }
    }
}
