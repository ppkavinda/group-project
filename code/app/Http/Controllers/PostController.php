<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        $posts = \App\Post::all();
        return view('study.posts.index', ['posts' => $posts]);
    }

    public function create () {
        return view('study.tute.create');
    }
    public function show() {
    	return view('study.course');
    }
  
}
