<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class likeController extends Controller
{
    public function likePost(Request $request){
        if(Auth::check()){
            $likes = new \App\Follow;
            $likes->user_id = $request->id;
            $likes->tweet_id = $request->id;
            $likes->followed = $request->name;

            $likes->save();

            return redirect('/');
        }
    }
}
