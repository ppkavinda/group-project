<?php

namespace App\Http\Controllers;

use \App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Notifications\PostSubmitted;
use Illuminate\Support\Facades\Notification;


class PostController extends Controller
{
    /**
     * appling auth middleware
     * only authenticated users can be able to handle posts
     */
    public function __construct () {
        $this->middleware('auth');
        $this->middleware('facilitator')->except('show', 'getOne');
    }

    /**
     * NOT USED
     */
    public function index () {
        $user = auth()->user();
        $posts = \App\Post::all();
        return view('study.posts.index', ['posts' => $posts]);
    }

    /**
     * display the text editor for write a post
     * only facilitator can acces
     */
    public function create () {
        $user=auth()->user();
        $role=$user->role;
        if($role == 1)
        {
         $courses = \App\Course::get();
        return view('admin.posts.create', compact('courses'));
        }
        $courses = \App\Course::get();
        return view('study.posts.create', compact('courses'));
    }

    /**
     * display a perticular post
     * enrolled user can access
     */
    public function show(Post $post) {
        if (
            !(request()->user()->courses()
                ->where('course_id', '=', $post->course->id)
                ->count()
                || request()->user()->role ==1
                )
            ) {
                return redirect("/courses/{$post->course->id}");
            }
            $role=request()->user()->role;
        if($role ==1)
        {
            return view('admin.posts.index', compact('post'));
        }
        return view('study.posts.index', compact('post'));
    }
  
    /**
     * example code for upload video. NOT USED
     */
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
     * only facilitator can access
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255|min:4',
            'course_id' => 'required|min:1',
            'body' => 'required|min:20',
        ]);

        $post = Post::create([
            'body' => $request->body,
            'title' => $request->title,
            'user_id' => auth()->id(),
            'course_id' => $request->course_id,
        ]);
        $admin = \App\User::where('role','1')->get();
        Notification::send($admin, new PostSubmitted($post->id));
        return $post;
    }

    /**
     * return the edit post view
     * only facilitator can access
     */
    public function edit (Post $post) {
        $user = auth()->user();
        
        $role= $user->role;
        $courses = \App\Course::get();
        if($role == 1)
        {  //admin
            return view('admin.posts.edit', compact('courses', 'post'));
        }
        
        return view('study.posts.edit', compact('courses', 'post'));
    }
    
    /**
     * update a particular post
     * only facilitator can access
     */
    public function update (Request $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->course_id = $request->course_id;
        $post->save();
        return $post;
    }

    /**
     * publish a particular post
     * only author[facilitator] can access
     */
    public function publish (Request $request) {
        $post = Post::find($request->post);
        $post->published = true;
        $post->save();
        return $post;
    }

    /**
     * unpublish a perticular post
     * only author[facilitator] can access
     */
    public function unpublish (Request $request) {
        $post = Post::find($request->post);
        $post->published = false;
        $post->save();
        return $post;
    }

    /**
     * delete a particular post
     * only author[facilitator] can access
     */
    public function destroy (Post $post) {
        $post->delete();
        return redirect()->back();
    }

    /**
     * upload a cover image to post
     */
    public function cover (Post $post) {
        request()->validate([
            'cover' => 'image'
        ]);

        $post->update([
            'cover_img' => request()->file('cover')->store('img/posts/covers', 'public')
        ]);
    }

    /**
     * upload images which are used in posts
     * only facilitator can access
     */
    public function uploadImage (Request $request) {
        $image_name = md5($request->image . time()) . '.' . $request->image->getClientOriginalExtension();

        $upload = $request->image->move(public_path('storage/img/posts'), $image_name);

        return response()->json([
            'link' => '/storage/img/posts/' . $image_name,
        ]);
    }

    /**
     * delete the image from server when it deleted from the post
     * only facilitator can access
     */
    public function deleteImage (Request $request) {
        $file = public_path() . $request->image;
        if (File::exists($file)) {
            File::delete($file);
        }
    }

    /**
     * get a perticular post
     * auth user can access
     */
    public function getOne (Request $request, Post $post) {
        return response()->json($post);
    }


    public function adminindex() {
        $posts = \App\Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }


    public function admin_viewPosts_course(Request $request,$id= null)
    {
        $postscount = \App\Post::where(['posts.course_id'=>$id])->count();
        $posts = \App\Post::join('courses','posts.course_id','=','courses.id')
                    ->join('users','posts.user_id','=','users.id')
                    ->select('posts.*','users.name')
                    ->where(['posts.course_id'=>$id])->get();
        
        // dd($postscount);
        $user = \App\User::where('role',1)->get();
        $user[0]->unreadNotifications->where('type','App\Notifications\PostSubmitted')->markAsRead();
        return view('admin.course.posts')->with(compact(['posts','postscount']));
        
    }

    public function adminviewPosts()
    {
        $posts= \App\Post::all();
       
        
       //dd($posts);
        return view('admin.posts.view')->with(compact('posts'));

      
    }
 
   
   

    public function deletePost($id = null)
    {
        if(!empty($id)){
            Post::where(['id'=> $id])->delete();
            return redirect()->back()->with('flash_message_success','Post deleted Sucessfully!');
           
        }

    }

    public static function search(Request $request)
    {   
        
        $search = $request->get("search");
        
        $posts=\App\Post::where('posts.title','like','%'.$search.'%') 
                    ->orWhere('posts.id','like','%'.$search.'%')
                    ->orWhere('posts.course_id','like','%'.$search.'%')
                    ->orWhere('posts.created_at','like','%'.$search.'%')
                    ->orWhere('posts.updated_at','like','%'.$search.'%')
                    ->get();
      // dd($posts);
        return view('admin.posts.view',['posts'=>$posts]);
    }

}
