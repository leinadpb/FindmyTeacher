<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postblog extends Model
{
    protected $fillable = ['title', 'content'];

    public function commentblogs(){
        return $this->hasMany('App\Commentblog', 'postblog_id');
    }
}
