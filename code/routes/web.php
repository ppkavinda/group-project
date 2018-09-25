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

// authenticating routes
Auth::routes();

// admin
Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/profile', 'UserController@index')->middleware('auth');
Route::get('/profile/{user}', 'UserController@show');
Route::post('/users/{user}/edit', 'UserController@edit');

// shop
Route::get('/shop', function () {
	return view('shop.index');
});

// study
Route::view('/study', 'study.index');

Route::get('/enroll/{id}', 'EnrollController@create');

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{course}', 'CourseController@show');

Route::get('/posts/get/{post}', 'PostController@getOne');
Route::post('/posts/image', 'PostController@uploadImage');
Route::post('/posts/publish', 'PostController@publish');
Route::post('/posts/unpublish', 'PostController@unpublish');
Route::delete('/posts/image', 'PostController@deleteImage');
Route::resource('posts', 'PostController');

Route::get('/comments/{post}', 'CommentController@show');
Route::post('/comments/{id}', 'CommentController@store');

// general
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::post('/inquiry','InquiryController@store');

// Route::get('users',['uses' => 'UserController@index']);

Route::get('test', function () {
	dd(request()->user());
})->middleware('admin');