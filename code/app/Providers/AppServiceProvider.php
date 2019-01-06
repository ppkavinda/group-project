<?php

namespace App\Providers;

use \App\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('shop.partials.latestProducts', function ($view) {
            $view->with('latest', Product::latest()->limit(4)->get());
        });
        view()->composer('admin.partials.sidebar', function ($view){
            $user = \App\User::where('role',1)->get();
            $inquiryCount = $user[0]->unreadNotifications->where('type','App\Notifications\InquirySubmited')->count();
            $commentCount = $user[0]->unreadNotifications->where('type','App\Notifications\CommentSubmited')->count();
            $postCount = $user[0]->unreadNotifications->where('type','App\Notifications\PostSubmitted')->count();
            $view->with('inquiryCount', $inquiryCount)->with('commentCount',$commentCount)->with('postCount',$postCount);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
