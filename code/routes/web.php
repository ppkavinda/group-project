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

Route::get('/', 'studyController@index');

// admin
Route::get('/admin', function () {
    return view('admin.admin');
});

// sessions
// Route::get('/login', function () {
// 	return  view('session.login');
// });

// Route::get('/register', function () {
	// return  view('session.register');
// });

// shop
Route::get('/profile', function () {
	return  view('profile');
});

Route::get('/shop', function () {
	return view('shop.index');
});

// study
Route::get('/study', function () {
	return view('study.index');
});

Route::get('/enroll/{id}', 'EnrollController@create');

Route::get('/courses', 'CourseController@index');

Route::get('/courses/{course}', 'CourseController@show');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts/create', 'PostController@store');

Route::get('posts/{id}', 'PostController@index');

// general
Route::get('contact', function () {
	return view('contact');
});

Route::get('about', function () {
	return view('about');
});
Route::get('users',['uses' => 'UserController@index']);

// Route::post('/register',['uses'=>'UserController@RegisterUser', 'as'=>'signup']);

// Route::post('/login',['uses'=>'UserController@LoginUser', 'as'=>'signin']);

Route::post('/inquiry','InquiryController@store');

Route::get('/posts',function(){
	return view('study.posts.index');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
