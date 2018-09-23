<?php

namespace App\Http\Controllers;

use \App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * appling auth middleware
     * only authenticated users can be able to handle posts
     */
    public function __construct () {
        // $this->middleware('auth')->except(['show', 'get']);
    }
    public function index () {
        $posts = \App\Post::all();
        return view('study.posts.index', ['posts' => $posts]);
    }

    /**
     * display the text editor for make a post
     */
    public function create () {
        $courses = \App\Course::get();
        return view('study.posts.create', compact('courses'));
    }

    /**
     * display a perticular post
     */
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

    /**
     * save a post
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255|min:4',
            'course_id' => 'required|min:1',
            'body' => 'required|min:20',
        ]);

        $post = new Post;
        $post->body = $request->body;
        $post->title = $request->title;
        $post->user_id = auth()->id();
        $post->course_id = $request->course_id;
        $post->save();

        return $post;

    }

    public function edit (Post $post) {
        $courses = \App\Course::get();
        return view('study.posts.edit', compact('courses', 'post'));
    }
    
    public function update (Request $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->course_id = $request->course_id;
        $post->save();
        return $post;
    }

    public function publish (Request $request) {
        $post = Post::find($request->post);
        $post->published = true;
        $post->save();
        return $post;
    }
    public function unpublish (Request $request) {
        $post = Post::find($request->post);
        $post->published = false;
        $post->save();
        return $post;
    }

    public function destroy (Post $post) {
        $post->delete();
        return redirect()->back();
    }

    /**
     * upload images which are used in posts
     */
    public function uploadImage (Request $request) {
        $image_name = md5($request->image . time()) . '.' . $request->image->getClientOriginalExtension();

        $upload = $request->image->move(public_path('storage/img/posts'), $image_name);

        return response()->json([
            'link' => '/storage/img/posts/' . $image_name,
        ]);
    }

    public function deleteImage (Request $request) {
        $file = public_path() . $request->image;
        if (File::exists($file)) {
            File::delete($file);
        }
    }

    public function getOne (Request $request) {
        $post = Post::find($request->post);
        return response()->json($post);
    }
}
