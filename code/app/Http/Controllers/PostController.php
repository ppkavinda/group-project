<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(){
        view('study.posts.index');

    }
    public function showpost(){
        $posts =DB::table('posts')
            ->join('courses','posts.id','=','courses.id')
            ->select('posts.*','courses.title')
            ->get();
     
       return view('study.posts.index',['posts'=> $posts]);


    }
}
