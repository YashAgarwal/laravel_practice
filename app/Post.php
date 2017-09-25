<?php

namespace App;

class Post extends Model
{

	//this makes the relationship Post->comments
	//Use hasMany relationship between the post and the comment 

	protected $fillable = ['title', 'body'];
    //protected guarded = [''];

    public function comments()
    {

    	return $this->hasMany(Comment::class);

    }

    public function addComment($body){


    	$this->comments()->create(compact('body'));
    	
    	// Comment::create([

    	// 	'body' => $body,
    	// 	'post_id' => $this->id

    	// ]);

    }
}    
