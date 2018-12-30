<?php

namespace App\Http\Controllers;

use App\User; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;


class UserController extends Controller
{

   
    public function index () {
        $user = auth()->user();
        $idNo= auth()->user()->nic;
        $postsCount = \App\Advertisement::where('id',$idNo)->count();
        return view('profile.index', ['user'=>$user,'postsCount'=>$postsCount]);
    }
    
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
    }
}
