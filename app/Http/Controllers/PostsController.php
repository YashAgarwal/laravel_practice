<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){

    	$posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));
    
    }

    public function show(Post $post){

    	//dd($post->comments);
    	// $post = Post::find($id);
    	//dd($post);
    	// return view('posts.show', compact('post'));
    	return view('posts.show', compact('post'));

    }

    public function create(){

    	return view('posts.create');
    
    }

    public function store(){

    	//die and dump
    	//dd(request()->all());

    	// Create a new post using the user data

    	// $post = new \App\Post;

    	// $post->title = request('title');
    	
    	// $post->body = request('body');

    	// // Save it in the database

    	// $post->save();

    	// Post::create([
    		
    	// 	'title' => request('title'),

    	// 	'body' => request('body')
    	// ]);

    	$this->validate(request(), [
    	
    		'title' => 'required',
    		'body' => 'required'
    	
    	]);

    	Post::create(request(['title', 'body']));

    	//dd(re)
    	// And then redirect to the homepage

    	return redirect('/');
    }

}