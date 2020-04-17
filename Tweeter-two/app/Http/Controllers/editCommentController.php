<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editCommentController extends Controller
{
    public function editComment(Request $request, $id){
        if(Auth::check()){
            $comment = \App\Comment::find($id);

            return view('updateComment', ['comments' => $comment]);
        }
    }
    public function updateComment(Request $request, $id){
        if(Auth::check()){
            $comment=\App\Comment::find($id);
            $comment->content = $request->content;

            $comment->save();

            return redirect('/home');
        }
    }
}
