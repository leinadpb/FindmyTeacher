<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentblog extends Model
{
    protected $fillable = ['title', 'content'];

    public function postblog(){
        return $this->belongsTo('App\Postblog', 'postblog_id');
    }
}
