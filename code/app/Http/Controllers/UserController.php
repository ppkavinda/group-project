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
    public function __consctuct () {
        $this->middleware('auth')->except(['index', 'show']);
    }
   
    public function index (User $user) {
        return view('profile.index', compact('user'));
    }
    
    public function edit (Request $request, User $user) {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->save();
        return $user;
    }
    public function show (User $user) {
        return $user;
    }
}
