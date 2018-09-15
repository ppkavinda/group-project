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
    public function RegisterUser(Request $request){

<<<<<<< HEAD

    //input validation

    $validatedData = $request->validate([
    'name' => 'required|min:3|max:50',
    'pwd' => 'required|confirmed|min:6',
]);

=======
    	
        
        $validatedData = $request->validate([
        'name' => 'required|min:3|max:50',
       // 'password' => 'required|confirmed|min:6',
        ]);
>>>>>>> 1d46ca424f5ebb810eb2f459bc766005eeaed731

    	$table =new User();

    	$table->name = $request->input('name');
    	$table->nic = $request->input('nic');
    	$table->email = $request->input('email');
    	$table->pwd = bcrypt($request->input('pwd'));
        //cpwd = bcrypt($request->(cpwd));

         //$user = User::create(request(['name','nic', 'email', 'pwd']));
        $table->save();
    	return redirect()-> back()->with('message','Successfully registered');
<<<<<<< HEAD
        
=======
       
>>>>>>> 1d46ca424f5ebb810eb2f459bc766005eeaed731

    }

    public function LoginUser(Request $request){

        
        $email = $request->input('email');
        $pwd = $request->input('pwd');

        $checkLogin=DB:: table('users')-> where(['email'=>$email,'pwd'=>$pwd])->get();

        if(count($checkLogin)>0){
            echo "login success";
           
        }
        else
        {
            echo "login fail";
        }
    }
}
