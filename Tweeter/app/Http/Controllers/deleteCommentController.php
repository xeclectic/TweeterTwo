<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class deleteCommentController extends Controller
{
    public function deleteComment(Request $request, $id) {
        if(Auth::check()){
        $comment = \App\Comment::find($id);
        $comment -> delete();

        return redirect('viewTweet/'.$request->tweet_id);

        }
    }
}
