<?php

namespace App;

use Daydev\Vote\Traits\Votable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    use Votable;

    public function user() {
        return $this->belongsTo(\App\User::class);   
    }

    public function comments() {
        return $this->hasMany(\App\Comment::class);   
    }
}
