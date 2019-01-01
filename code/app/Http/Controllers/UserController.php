<?php

namespace App\Http\Controllers;

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
        return view('profile.index', ['user'=>$user]);
    }
    
    public function show (User $user) {
        $courses = $user->courses;
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
    
   

    public function updatePassword(Request $request) {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        if(!Hash::check($oldPassword, Auth::user()->password)){
          return back()->with('msg','The specified password does not match the database password'); //when user enter wrong password as current password
        }else{
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
           return back()->with('msg','Password has been updated');
        }
        echo 'here update query for password';
    }
}
