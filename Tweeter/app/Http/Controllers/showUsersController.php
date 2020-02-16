<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class showUsersController extends Controller
{   public function showUsers(){
        if(Auth::check()){
            $users = \App\User::all();
            $follows = \App\Follow::where('followed', Auth::user()->id);

            return View('listUsers', ['users' => $users, 'follows' => $follows]);
        }else{
            return redirect('/');
        }
    }

    public function followUser(Request $request){
        if(Auth::check()){
            $follow = new \App\Follow;
            $follow->user_id = $request->id;
            $follow->followed = $request->userId;
            //$follow->followed = $request->name;

            $follow->save();

            return redirect('/');
        }
    }
}
