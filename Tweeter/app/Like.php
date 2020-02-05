<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "likes";

    function tweet(){
        return $this->belongTo('App\Tweet');
    }

    function comment(){
        return $this->belongTo('App\Comment');
    }
}
