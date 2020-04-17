<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editProfileController extends Controller
{
    public function show(){
        if(Auth::check()){
            $profile=Auth::user()->profile;
            return view('profileEdit', ['profile' => $profile]);
        }

    }

    //edit bio//

    public function update(Request $request) {
        if(Auth::check()){
            $profile = new \App\Profile;
            $profile->name = $request->name;
            $profile->user_id = $request->id;
            $profile->biography = $request->bio;

            $profile->save();

            return redirect('/home');
        }
    }
}
