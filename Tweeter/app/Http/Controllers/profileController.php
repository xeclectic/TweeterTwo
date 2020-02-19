<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(Request $request)
    {
        $tweets=\App\Tweet::all();
        return view('profile', ['tweets' => $tweets]);
    }
}
