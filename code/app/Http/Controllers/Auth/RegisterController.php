<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\Welcome;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'nic' =>'required|string|max:10|unique:users|regex:/[0-9]{9}[vV]$/',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'nic' => $data['nic'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'api_token' => str_random(60),
        ]);

        Mail::to($user)->send(new Welcome($user));

        return $user;
    }
    
    /**
     * LiveValidation
     * validating forms on the fly
     */
    protected function liveValidate()
    {
        // dd(request()->all());
        if (request()->name) {
            request()->validate([
                'name' => 'required|string|max:255',
            ]);
        }
        if (request()->nic) {
            request()->validate([
                'nic' =>'required|string|max:10|unique:users|regex:/[0-9]{9}[vV]$/',
            ]);
        }
        if (request()->email) {
            request()->validate([
                'email' => 'required|string|email|max:100|unique:users',
            ]);
        }
        if (request()->password) {
            request()->validate([
                'password' => 'required|string|min:6|confirmed',
            ]);
        }
    }
}
