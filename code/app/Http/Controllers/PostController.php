<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create () {
        return view('study.tute.create');
    }
    public function show() {
    	return view('study.tute.index');
    }
  
}
