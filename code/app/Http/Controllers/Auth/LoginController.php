<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected function redirectTo () {
    //     $role = auth()->user()->role;
        
    //     if ($role == 1) {
    //         return '/admin';
    //     } else if ($role == 2) {
    //         return  '/profile';
    //     }
    //     return '/';
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    protected function authenticated(Request $request, User $user)
    {
        if ($user->role == 1) {
            return redirect()->intended('/admin');
        } else if ($user->role == 2) {
            return  redirect()->intended('/profile');
        }
        return redirect()->intended('/');
    }
}
