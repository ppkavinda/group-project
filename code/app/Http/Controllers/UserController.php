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
        return view('profile.index', compact('user'));
    }
    
    public function show (User $user) {
        $courses = $user->courses;
        return view('profile.index', compact('user'));

    }
}
