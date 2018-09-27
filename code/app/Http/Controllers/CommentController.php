<?php

namespace App\Http\Controllers;

use App\Post;
use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct () {
        $this->middleware('auth')->only('store', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * saving a comment
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post)
    {
        $request->validate([
            'body' => 'required|min:4|max:191',
            'post_id' => 'exists:posts,id',
            'parent_id' => 'exists:comments,id',
        ]);

        $comment = Comment::create([
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'post_id' => $post,
            'parent_id' => $request->parent_id ?: null // optional
        ]);

        return $comment->load('user');
    }

    /**
     * NOT USED
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $comments = Comment::with(['user'])->where('post_id','=', $post)->latest()->get();
        return response()->json($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}
