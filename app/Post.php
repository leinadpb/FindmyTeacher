<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function teacher(){
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

}
