<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "profile";
    public $timestamp = false;


    function user(){
        return $this->hasOne('App\User');
    }
}
