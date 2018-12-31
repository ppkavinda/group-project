<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ProductController;

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
Route::view('/admin', 'admin.index');

// profile
Route::get('/profile', 'UserController@index')->middleware('auth');
Route::get('/profile/{user}', 'UserController@show')->name('user.profile');
Route::post('/users/{user}/edit', 'UserController@edit');
Route::get('/user', 'UserController@get');
// shop
Route::view('/shop', 'shop.index');

Route::view('/categories/men', 'shop.mens')->name('categories.men');
Route::view('/categories/woman', 'shop.woman')->name('categories.women');
Route::get('/categories/jewellery', function () {
    dd('jewellery');
})->name('categories.jewellery');

Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');

Route::post('/reviews/{product}/create', 'ReviewController@store')->name('reviews.store');

Route::get('/cart', 'CartController@index');
Route::post('/cart/{product}', 'CartController@store');
Route::put('/cart/{cartId}', 'CartController@update');
Route::delete('/cart/{cartId}', 'CartController@destroy');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout/details', 'CheckoutController@storeDetails');
Route::get('/checkout/success', 'CheckoutController@success');
Route::get('/checkout/cancel', 'CheckoutController@cancel');
Route::post('/checkout/notify', 'CheckoutController@notify');

Route::post('/orders/store', 'OrderController@store');

// study
Route::view('/study', 'study.index');

Route::get('/enroll/{id}', 'EnrollController@create');

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{course}', 'CourseController@show');

Route::get('/posts/get/{post}', 'PostController@getOne');
Route::post('/posts/image', 'PostController@uploadImage');
Route::delete('/posts/image', 'PostController@deleteImage');
Route::post('/posts/{post}/cover', 'PostController@cover');
Route::post('/posts/publish', 'PostController@publish');
Route::post('/posts/unpublish', 'PostController@unpublish');
Route::resource('posts', 'PostController');

Route::get('/videos/upload', 'VideoController@create');
Route::post('/videos/upload', 'VideoController@store');

Route::get('/comments/{post}', 'CommentController@show');
Route::post('/comments/{id}', 'CommentController@store');
Route::delete('/comments/{comment}', 'CommentController@destroy');

// general
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::post('/inquiry', 'InquiryController@store');

// Route::get('users',['uses' => 'UserController@index']);

Route::get('test', function () {
    $p = [];

    foreach (\Cart::content() as $key => $value) {
        array_push($p, $value->id);
    }
    dd($p);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//selling post
Route::get('soap', function(){
	return view('add.soap');
});

Route::get('clothes',function(){
	return view('add.clothes');
});

Route::get('spices', function(){
	return view('add.spices');
});

Route::get('mask', function(){
	return view('add.mask');
});

Route::get('shoes', function(){
    return view('add.shoes');
});

Route::post('/postAdd','ProductController@store');

Route::get('YourAdvertisements','ProductController@index');
Route::get('YourAdvertisements/{productId}/delete','ProductController@destroy');
Route::post('/YourAdvertisements/{productId}/update','ProductController@update');

//view advertisement for buyers
Route::get('/categories/{kind}/{type}','ProductController@viewKindAdvertisements');
Route::get('/categories/{category_id}', 'ProductController@viewAdvertisements');