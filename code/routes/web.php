<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('study.index');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/login', function () {
	return  view('session.login');
});
Route::get('/register', function () {
	return  view('session.register');
});
Route::get('/profile', function () {
	return  view('profile');
});
Route::get('/shop', function () {
	return view('shop.index');
});
Route::get('/study', function () {
	return view('study.index');
});
Route::get('/courses', function () {
	return view('study.courses');
});
Route::get('/courses/{course}', function () {
	return view('study.course');
});
Route::get('contact', function () {
	return view('contact');
});
Route::get('about', function () {
	return view('about');
});
Route::get('users',['uses' => 'UserController@index']);

Route::post('/register',['uses'=>'UserController@RegisterUser', 'as'=>'signup']);

Route::post('/login',['uses'=>'UserController@LoginUser', 'as'=>'signin']);


