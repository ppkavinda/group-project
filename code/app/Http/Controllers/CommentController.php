<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use App\Notifications\CommentSubmited;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $user = Post::find($post)->auther;
        $admin = \App\User::where('role','1')->get();
        Notification::send($user, new CommentSubmited($comment->id));
        Notification::send($admin, new CommentSubmited($comment->id));
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
        $comments = Comment::with(['user'])->where('post_id', '=', $post)->latest()->get();
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
        if ($comment->user_id != auth()->id()) {
            abort(403);
        }

        $comment->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return back();
    }

    public function view_comments()
    {
        $comments = \App\Comment::paginate(5);
        $user = \App\User::where('role',1)->get();
        $user[0]->unreadNotifications->where('type','App\Notifications\CommentSubmited')->markAsRead();

        return view('admin.comments.view')->with(compact('comments'));
    }
    public static function search(Request $request)
    {   
        
        $search = $request->get("search");
        
        $comments = \App\Comment::where('comments.id','like','%'.$search.'%') 
                    ->orWhere('comments.body','like','%'.$search.'%')
                    ->orWhere('comments.user_id','like','%'.$search.'%')
                    ->orWhere('comments.post_id','like','%'.$search.'%')
                    ->paginate(5);  
      // dd($posts);
        return view('admin.comments.view',['comments'=>$comments]);
    }


    public function admin_viewComments_on_post(Request $request,$id= null)
    {
        $commentcount = \App\Comment::where(['comments.post_id'=>$id])->count();
        $comments = \App\Comment::where(['comments.post_id'=>$id])->paginate(5);
        
        // dd($comments);
        return view('admin.comments.view')->with(compact(['comments','commentcount']));
        
    }

    public function deleteComment($id = null)
    {
        if(!empty($id)){
            \App\Comment::where(['id'=> $id])->delete();
            return redirect()->back()->with('flash_message_success','Comment deleted Sucessfully!');
           
        }

    }
}
