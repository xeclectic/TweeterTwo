<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = "tweets";
    public $timestamp = false;

    function user(){
        return $this->belongsTo('App\User');
    }

    function comment(){
        return $this->hasMany('App\Comment');
    }

    function like(){
        return $this->hasMany('App\Like');
    }
}
