<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        $courses = $user->courses;
        if($role == 1)
        {
         
          return view('admin.profile.index', ['user'=>$user],['courses'=>$courses]);

        }

        
      
        return view('profile.index', ['user'=>$user], ['courses'=>$courses]);
    }
    
    public function show(User $user)
    {
        $courses = $user->courses;
        $role=$user->role;
        // dd($user);
        if ($role == 1) {
            return view('admin.profile.index', compact('user'));
        }

        return view('profile.index', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->contact = $request->contact;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->description = $request->description;
        $user->profile_pic = $request->profile_pic;
        

        $user->save();
        return $user;
    }
    

    public function get()
    {
        return auth()->user();
    }

    public function search_user(Request $request)
    {
        $request->validate([
             'search_users' => 'required',
         ]);
        $search = $request->input('search_users');
        if ($search != "") {
            $users= \App\User::join('roles', 'users.role', '=', 'roles.id')
                             ->select('users.*', 'roles.role')
                             ->where('name', 'LIKE', '%'. $search .'%')
                             ->orWhere('email', 'LIKE', '%'.$search .'%')
                             ->orWhere('nic', 'LIKE', '%'.$search .'%')
                             ->orWhere('roles.role', 'LIKE', '%'. $search .'%')
                             ->get();
            if (count($users) > 0) {
                return view('admin.users.search')->withDetails($users)->withQuery($search);
            }
             

         //dd($users);\
         return view('admin.users.search')->withMessage("No Users Found! "); 
         }
     
     }
     
     public function user_Details(){	
        	
        $users = \App\User::all();	
       $roles=DB::table('roles')->get();
       //dd($users);
        return view('admin.users.view',['users'=>$users],['roles'=>$roles]);	
         
     }	
         
 

 
   
    // Update Password
    public function updatePassword(Request $request)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        if (!Hash::check($oldPassword, Auth::user()->password)) {
            return back()->with('msg', 'The specified password does not match the database password'); //when user enter wrong password as current password
        } else {
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            return back()->with('msg', 'Password has been updated');
        }
        echo 'here update query for password';
    }

 public function editRole(Request $request, $id = null)
    { 
        
        if($request->isMethod('post')){
            $data = $request->all();

            User::where(['id'=>$id])->update(['role'=>$data['category_id']
            ]);
            return redirect('/admin/view-users');
        }
        $roles=DB::table('roles')->get();
        $usersdetails =User::where(['id'=>$id])->first();
        //dd($courseDetails);
        return view('admin.users.edit')->with(compact(['roles','usersdetails']));
    }
   
    public function view_user(Request $request ,$id=null)
    {

        $users = \App\User::where(['users.id'=>$id])->get();
       return view('admin.users.view')->with(compact('users'));
    }

   
}



    


