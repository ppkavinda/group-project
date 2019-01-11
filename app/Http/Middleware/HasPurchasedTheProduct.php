<?php

namespace App\Http\Middleware;

use Closure;

class HasPurchasedTheProduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product_id = $request->route('product')->id;
        $orders = auth()->user()->orders;
        $products = [];     // all the products user has bought

        foreach ($orders as $order) {
            foreach ($order->products as $product) {
                array_push($products, $product->id);
            }
        }
        
        if (in_array($product_id, $products)) {
            // abort(401, 'You havent bought this product yet!');
            return back()->with('error', 'You havent bought this product yet!');
        }

        return $next($request);
    }
}
