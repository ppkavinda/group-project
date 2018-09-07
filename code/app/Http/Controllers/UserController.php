<?php

namespace App\Http\Controllers;
use App\User; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function RegisterUser(Request $request){

    	$this->validate($request ,[
    	'name' => 'required|max:20',
    	'pwd'  => 'required|min:6'
    	]);


    	$table =new User();

    	$table->name = $request->input(name);
    	$table->nic = $request->input(nic);
    	$table->email = $request->input(email);
    	$table->pwd = bcrypt($request->input(pwd));
    	$table->cpwd = bcrypt($request->input(cpwd));

    	$table->save();
    	return redirect()-> back()->with('message','Successfully registered');

    }
}
