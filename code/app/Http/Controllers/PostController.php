<?php

namespace App\Http\Controllers;

use \App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct () {
        $this->middleware('auth')->except('show');
    }
    public function index () {
        $posts = \App\Post::all();
        return view('study.posts.index', ['posts' => $posts]);
    }

    public function create () {
        $courses = \App\Course::get();
        return view('study.posts.create', compact('courses'));
    }

    public function show(Post $post) {
        return view('study.posts.index', compact('post'));
    }
  
    public function insertVideo (Request $request) {
        $request->validate([
            'video' => 'required | max:20000 | mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'title' => 'required',
        ]);
        $a = $request->video->store('public/videos');
        \App\Video::create([
            'title' => ''
        ]);
        return redirect()->back();
    }

    public function store(Request $request) {
        $detail=$request->postContent;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'\dist\img\posts\\'. $image_name;
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', '/dist/img/posts/'.$image_name);
        }
 
        $detail = $dom->savehtml();
        $post = new Post;
        $post->body = $detail;
        $post->post_image = '4.jpg';
        $post->title = $request->postTitle;
        $post->user_id = auth()->user()->id;
        $post->course_id = $request->courseId;
        $post->save();
        return view('study.posts.index',compact('post'));
    }

    public function edit (Post $post) {
        $courses = \App\Course::get();
        return view('study.posts.edit', compact('courses', 'post'));
    }
    
    public function update (Request $request, Post $post) {
        $detail=$request->postContent;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'\dist\img\posts\\'. $image_name;
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', '/dist/img/posts/'.$image_name);
        }
 
        $detail = $dom->savehtml();

        $post->body = $detail;
        $post->post_image = '4.jpg';
        $post->title = $request->postTitle;
        $post->user_id = auth()->user()->id;
        $post->course_id = $request->courseId;
        $post->save();
        return view('study.posts.index',compact('post'));
    }
}
