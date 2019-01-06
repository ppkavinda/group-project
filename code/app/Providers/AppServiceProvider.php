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
        view()->composer('admin.partials.sidebar', function ($view) {
            $user = \App\User::where('role', 1)->get();
            $count = $user[0]->notifications->where('type', 'App\Notifications\InquirySubmited')->count();
            $view->with('count', $count);
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
