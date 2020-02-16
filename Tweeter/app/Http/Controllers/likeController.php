<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class likeController extends Controller
{
    public function likePost(Request $request, $id){
        if(Auth::check()){
            $like = new \App\Like;
            $like->user_id = $request->id;
            $like->tweet_id = $request->tweet_id;

            $like->save();

            return redirect('/');
        }
    }
}
