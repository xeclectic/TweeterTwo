<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class showUsersController extends Controller
{   public function showUsers(){
        if(Auth::check()){
            $users = \App\User::all();
            $follows = \App\Follow::where('followed', Auth::user()->id->get());

            return View('listUsers', ['users' => $users, 'follows' => $follows]);
        }else{
            return redirect('/');
        }
    }
}

