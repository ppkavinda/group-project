<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class UserController extends Controller
{
    public function __consctuct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
   
    public function index()
    {
        $user = auth()->user();
        $role=$user->role;
        //dd($role);
        if($role == 1)
        {
          return view('admin.profile.index', ['user'=>$user]);
        }
        return view('profile.index', ['user'=>$user]);
     }
    
    public function show (User $user) {
        $courses = $user->courses;
        $role=$user->role;
       // dd($user);
        if($role == 1)
      
        {
          return view('admin.profile.index',compact('user'));
        }

        return view('profile.index', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->save();
        return $user;
    }
    

    public function get()
    {
        return auth()->user();
    }

    public function user_Details(){
        
       $users = \App\User::join('roles','users.role','=','roles.id')->select('users.*','roles.role')->get();
      
       return view('admin.users.view')->with(compact('users'));
    
    }
    

     
     public function search_user(Request $request )
     {
         $request->validate([
             'search_users' => 'required',
         ]);
         $search = $request->input('search_users');
         if( $search != "")
         {
             $users= \App\User::join('roles', 'users.role', '=', 'roles.id')
                             ->select('users.*', 'roles.role')
                             ->where('name', 'LIKE', '%'. $search .'%')
                             ->orWhere('email', 'LIKE', '%'.$search .'%')
                             ->orWhere('nic', 'LIKE', '%'.$search .'%')
                             ->orWhere('roles.role', 'LIKE', '%'. $search .'%')
                             ->get();
             if(count($users) > 0)
             {
                 return view('admin.users.search')->withDetails($users)->withQuery($search);
             }
             
         //dd($users);\
         return view('admin.users.search')->withMessage("No Users Found! "); 
         }
     
     }
     

  
 }