<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//this makes the relationship Post->comments
	//Use hasMany relationship between the post and the comment 

    public function comments()
    {

    	return $this->hasMany(Comment::class);

    }
}
