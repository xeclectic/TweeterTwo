<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class profileController extends Controller
{
    public function index(Request $request)
    {
        $tweets=\App\Tweet::all();
        if(Auth::check()){
            $profile=Auth::user()->profile;
            return view('profile', ['tweets' => $tweets, 'profile' => $profile]);
        }
    }
}
