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
            $inquiryCount = $user[0]->unreadNotifications->where('type', 'App\Notifications\InquirySubmited')->count();
            $commentCount = $user[0]->unreadNotifications->where('type', 'App\Notifications\CommentSubmited')->count();
            $postCount = $user[0]->unreadNotifications->where('type', 'App\Notifications\PostSubmitted')->count();
            $view->with('inquiryCount', $inquiryCount)->with('commentCount', $commentCount)->with('postCount', $postCount);
        });
        view()->composer('shop.partials.newarrivals', function ($view) {
            $latestClothes = Product::latest()->where('category_id', 1)->limit(8)->get();
            $latestMasks = Product::latest()->where('category_id', 2)->limit(8)->get();
            $latestShoes = Product::latest()->where('category_id', 5)->limit(8)->get();
            $latestSpices = Product::latest()->where('category_id', 4)->limit(8)->get();
            $topRatingProduct = Product::orderBy('ratings', 'decs')->limit(2)->get();

            $view->with('latestClothes', $latestClothes)
                ->with('latestMasks', $latestMasks)
                ->with('latestShoes', $latestShoes)
                ->with('latestSpices', $latestSpices)
                ->with('topRatingProduct', $topRatingProduct);
        });
        view()->composer('profile.index', function ($view) {
            $orderNotifications = auth()->user()->unreadNotifications->where('type', 'App\Notifications\OrderPlaced');
            // $orders = \App\Orders::find($orderNotifications->data->order_id)->products;
            $view->with('orderNotifications', $orderNotifications);
            // ->with('orders', $orders);
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
