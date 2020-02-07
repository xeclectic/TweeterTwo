<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tweetController extends Controller
{
    public function show(){
        $tweets =\App\Tweet::all();
        return view('newsfeed', ['tweets' => $tweets]);
    }
}
