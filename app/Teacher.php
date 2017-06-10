<?php

/* MODEL CLASS FOR A TEACHER */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Teacher extends Model{

	protected $fillable = ['name', 'work', 'description', 'master', 'career'];

	public function posts(){
	    return $this->hasMany('App\Post', 'teacher_id');
    }

}

?>