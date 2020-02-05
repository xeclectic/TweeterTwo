<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "Comment";
    public $timestamp = false;

    function tweet(){
        return $this -> belongTo('App\Tweet');
    }

    function like(){
        return $this->hasMany('App\Like');
    }
}
