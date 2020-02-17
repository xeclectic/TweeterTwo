<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editProfileController extends Controller
{
    public function show(){
        if(Auth::check()){
            $profile = new \App\Profile;
            return view('profileEdit', ['profile' => $profile]);
        }

    }

    //edit bio//

    public function update(Request $request){
        if(Auth::check()){
            $profile=\App\Profile::all();
            $profile->user_id = $request->name;
            $profile->biography = $request->biography;

            $profile->save();

            return redirect('profile');
        }
    }
}
