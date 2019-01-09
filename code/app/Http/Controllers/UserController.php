<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        $courses = $user->courses;
        $orders = $user->orders;
        $posts = $user->posts;

        return view('profile.index', compact('user', 'courses', 'orders', 'products', 'posts'));
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
        $request->validate([
            'address1' => 'required|min:10',
            'city' => 'required|string',
            // 'postal_code' => 'required|min:5|max:5|regex:/^[0-9]{5}$/u',
            // 'telephone' => 'required|min:9|regex:/^((0{2}|\+)\d{11}|0\d{9})$/',
            'postal_code' => ['required', 'min:5', 'max:5', 'regex:/^[0-9]{5}$/u'],
            'telephone' => ['required', 'min:9', 'regex:/^((0{2}|\+)\d{11}|0\d{9})$/'],
            // 'profile_pic'=>[ 'required|image|mimes:jpeg,png,jpg,gif|max:2048']

        ]);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->telephone = $request->telephone;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->description = $request->description;
        // $user->profile_pic = $filename;
        if (auth()->user()->role == 2) {
            $user->courses= $request->courses;
            $user->days= $request->days;
            $user->experience= $request->experience;
            $user->education= $request->education;
        }
        $user->save();
        //     return view('profile.index')
//          ->withDetails($users)->withMessage("Profile Successfully updated");
        return back();
        // return $user;
    }
    

    public function get(User $user)
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
     
    public function user_Details()
    {
        $users = \App\User::all();
        $roles=DB::table('roles')->get();
        //dd($users);
        return view('admin.users.view', ['users'=>$users], ['roles'=>$roles]);
    }
         
 

 
   
    // Update Password
    public function updatePassword(Request $request)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        if (!Hash::check($oldPassword, Auth::user()->password)) {
            return back()->with('msg', 'The specified password does not match to your password'); //when user enter wrong password as current password
        } else {
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            return back()->with('msg', 'Password has been updated');
        }
        echo 'here update query for password';
    }

    public function editRole(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
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
   
    public function view_user(Request $request, $id=null)
    {
        $users = \App\User::where(['users.id'=>$id])->get();
        return view('admin.users.view')->with(compact('users'));
    }
    
    public function promote(Request $request)
    {
        $request->validate([
            'role' => [
                'required',
                Rule::in([2, 3])
            ]
        ]);
        DB::table('promotion')->insert([
            'tobeRole' => $request->role,
            'prevRole' => auth()->user()->role,
            'user_id' => auth()->user()->id
        ]);
        return back()->with('message', 'Request sent!');
    }
}
