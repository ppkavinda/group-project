<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ProductController;

// use Illuminate\Notifications;
use Illuminate\Support\Facades\Notification;

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
Route::view('/', 'welcome.home')->name('home');

Route::get('/study', 'studyController@index');

// authenticating routes
Auth::routes();

// admin


// profile
Route::get('/profile', 'UserController@index')->middleware('auth');
Route::get('/profile/{user}', 'UserController@show')->name('user.profile');
Route::post('/users/{user}/edit', 'UserController@edit');
Route::get('/user', 'UserController@get');

Route::get('/order/{user}', 'UserController@myOrder');
Route::post('/updatePassword', 'UserController@updatePassword');


// shop
Route::get('/shop', 'ShopController@viewLatestAndRatingProducts');

Route::view('/categories/men', 'shop.mens')->name('categories.men');
Route::view('/categories/woman', 'shop.woman')->name('categories.women');
Route::get('/categories/jewellery', function () {
    dd('jewellery');
})->name('categories.jewellery');

Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

Route::post('/reviews/{product}/create', 'ReviewController@store')->name('reviews.store')
        ->middleware("HasPurchasedTheProduct");

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
Route::put('/orders/{order}/edit', 'OrderController@update');

Route::get('/search/shop', 'SearchController@shop')->name('search.shop');
Route::get('/search/study', 'SearchController@study')->name('search.study');

// study
//Route::view('/study', 'study.index');

Route::get('/enroll/{id}', 'EnrollController@create');

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');

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

// Route::get('/home', 'HomeController@index')->name('home');
//sachintha


// admin-admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', 'InquiryController@countOfNotification');
    //Route::view('/admin', 'admin.index');

    Route::match(['get','post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get','post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get','post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::get('/admin/view-category', 'CategoryController@viewCategories');
    Route::get('/admin/serach-category', 'CategoryController@search');
    //Route::match(['get','post'],'/admin/search-category','CategoryController@searchCategory');
    //courses

    //course-sachintha
    Route::match(['get','post'], '/admin/add-course', 'CourseController@addCourse');
    Route::match(['get','post'], '/admin/edit-course/{id}', 'CourseController@editCourse');
    Route::match(['get','post'], '/admin/delete-course/{id}', 'CourseController@deleteCourse');

    Route::get('/admin/view-course', 'CourseController@viewCourses');
    Route::get('/admin/search-course', 'CourseController@search');
    //view inquery-Sachintha
    Route::get('/admin/view-inquiry', 'InquiryController@viewInquire');
    Route::get('/admin/delete-inquiry/{id}', 'InquiryController@deleteInquire');


    Route::get('/admin/view-users', 'UserController@user_Details');
    Route::get('/admin/search-users', 'UserController@user_Details');
    Route::post('/admin/search-users', 'UserController@search_user');
    //user-sachintha
    Route::get('/admin/view-course/posts/{id}', 'PostController@admin_viewPosts_course');

    Route::get('/admin/view-posts', 'PostController@adminviewPosts');
    Route::get('/admin/view-users', 'UserController@user_Details');

    ///post-sachintha
    Route::get('/admin/search-post', 'PostController@search');
    Route::get('/admin/delete-post/{id}', 'PostController@deletePost');
    Route::post('/admin/delete-post/{id}', 'PostController@deletePost');

    ///comments- sachintha
    Route::get('/admin/view-comments', 'CommentController@view_comments');
    Route::get('/admin/search-comments', 'CommentController@search');
    Route::get('/admin/search-comments/{id}', 'CommentController@admin_viewComments_on_post');

    Route::get('/admin/delete-comment/{id}', 'CommentController@deleteComment');
    Route::post('/admin/delete-comment/{id}', 'CommentController@deleteComment');

    //generate PDF

    Route::get('/admin/courses/generate-pdf', 'CourseController@generatePDF');
});

Route::get('test', function () {
    // return new App\Mail\Welcome(factory('App\User')->make());
    // dd(auth()->user());
    // auth()->user()->nofity(new \App\Notifications\OrderPlaced);
    // Notification::send(auth()->user(), new \App\Notifications\OrderPlaced('sample mesg'));
    // return dd(auth()->user()->notifications[0]->data['order_id']);
    $a = request()->session()->put('a', true);
    dd(request()->session()->get('a'));
});

Auth::routes();

//selling post
Route::get('soap', function () {
    return view('add.soap');
});

Route::get('clothes', function () {
    return view('add.clothes');
});

Route::get('spices', function () {
    return view('add.spices');
});

Route::get('mask', function () {
    return view('add.mask');
});

Route::get('shoes', function () {
    return view('add.shoes');
});

//Route::get('/profile', 'UserController@index')->middleware('auth');
//Route::get('/profile/{user}', 'UserController@show')->name('user.profile');
//Route::post('/users/{user}/edit', 'AdminController@edit');
//Route::get('/user', 'UserController@get');

Route::get('YourAdvertisements', 'ProductController@index');
Route::get('YourAdvertisements/{productId}/delete', 'ProductController@destroy');
Route::post('/YourAdvertisements/{productId}/update', 'ProductController@update');


//view advertisement for buyers
Route::get('/categories', 'ProductController@allAdvertisements');
Route::get('/categories/{kind}/{type}/{category_id}', 'ProductController@viewKindAdvertisements');
Route::get('/categories/{category_id}', 'ProductController@viewAdvertisements');

Route::get('/categories/{kind}/{category_id}', 'ProductController@viewOnlyKindAdvertisements');
Route::get('/quickView/{product}', 'ProductController@quickViewAdvertisement');
Route::get('/categories/{kind}/{type}', 'ProductController@viewKindAdvertisements');

Route::post('/categories/priceRange', 'ProductController@priceRange');
Route::get('/trendingProduct', 'ShopController@getTrendingProducts');
Route::get('/test1', 'InquiryController@countOfNotification');
