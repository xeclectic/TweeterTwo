<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "likes";
    public $timestamp = false;

    function tweet(){
        return $this->belongTo('App\Tweet');
    }

    function comment(){
        return $this->belongTo('App\Comment');
    }
}
