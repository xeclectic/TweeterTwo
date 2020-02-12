<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public $timestamp = false;

    function user(){
        return $this->belongTo('App\User');
    }

    function tweet(){
        return $this -> belongTo('App\Tweet');
    }

    function like(){
        return $this->hasMany('App\Like');
    }
}
