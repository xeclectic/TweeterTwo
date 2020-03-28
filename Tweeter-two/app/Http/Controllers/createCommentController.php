<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class createCommentController extends Controller
{
    function createComment (Request $request) {
        if (Auth::check()){
            $comment = new \App\Comment;
            $comment->tweet_id = $request->tweet_id;
            $comment->user_id = $request->id;
            $comment->content = $request->content;

            $comment->save();

            return redirect('viewTweet/'.$request->tweet_id);
        }
    }
}

