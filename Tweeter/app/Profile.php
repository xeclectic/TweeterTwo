<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    function user(){
        return $this->hasOne('App\User');
    }
}
