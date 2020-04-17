<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class showUsersController extends Controller
{   public function showUsers(){
        if(Auth::check()){
            $users = \App\User::all();
            $follows = Auth::user()->follow;

            return View('listUsers', ['users' => $users, 'follows' => $follows]);
        }else{
            return redirect('/home');
        }
    }

    public function followUser(Request $request){
        if(Auth::check()){
            $follow = new \App\Follow;
            $follow->user_id = $request->id;
            $follow->followed = $request->userId;

            $follow->save();

            return redirect('/showUsers');
        }
    }

    public function unfollowUser(Request $request){
        if(Auth::check()){
            $follow = \App\Follow::where("user_id", Auth::user()->id)->where("followed", $request->id)->get();

            $follow [0] -> delete();

            return redirect('/showUsers');

            }
        }
    }
