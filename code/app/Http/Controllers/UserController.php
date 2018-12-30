<?php

namespace App\Http\Controllers;

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
        $idNo= auth()->user()->nic;
        $postsCount = \App\Advertisement::where('id',$idNo)->count();
        return view('profile.index', ['user'=>$user,'postsCount'=>$postsCount]);
    }
    
<<<<<<< HEAD
    public function show (User $user) {
        $courses = $user->courses;
        return view('profile.index', compact('user'));
    }
//advertisements
    public function choosePage(){
        $idNo= auth()->user()->nic;
        $postsCount = \App\Advertisement::where('id',$idNo)->count();
        if($postsCount==0){
            echo '<script language="javascript">';
            echo 'alert("You do not have advertisements yet!!")';
            echo '</script>';
        }
        else{
            return view('profile.viewAdds');
        }
=======
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
    
    public function show(User $user)
    {
        return $user;
    }

    public function get()
    {
        return auth()->user();
>>>>>>> baa124b18e64a15eb79219cdd2dc319b8e87fb76
    }
}
