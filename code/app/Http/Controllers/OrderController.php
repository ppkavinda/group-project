<?php

namespace App\Http\Controllers;

use \App\Order;
use \App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * store the order just before goto the payment options page
     */
    public function store(Request $request)
    {
        if ($request->differentDelivery) {
            $request->validate([
                'delivery.address1' => 'required',
                'delivery.city' => 'required',
                'delivery.postal_code' => 'required',
                'delivery.telephone' => 'required',
            ]);
        }
        // order status =>
        // 0 - placed, not payed
        // 1 - placed, payed
        // 2 - placed, payed, shipped
        // 3 - placed, payed, shipped, delivered
        $order = '';

        DB::transaction(function () use (&$request, &$order) {
            // save order
            $order = Order::create([
                'user_id' => auth()->id(),
                'address1' => $request->delivery['address1'] ?: auth()->user()->address1,
                'address2' => $request->delivery['address2'] ?: auth()->user()->address2,
                'city' => $request->delivery['city'] ?: auth()->user()->city,
                'postal_code' => $request->delivery['postal_code'] ?: auth()->user()->postal_code,
                'telephone' => $request->delivery['telephone'] ?: auth()->user()->telephone,
                'status' => 0,
            ]);

            $products = [];
            
            // store the products related to the order
            foreach (\Cart::content() as $key => $product) {
                $order->products()->attach($product->id, ['price' => $product->price, 'amount' => $product->qty]);
            }
        });
        return response($order->id);
    }

    /**
     * update the stored order (when user click previous button on /checkout)
     */
    public function update(Request $request, Order $order)
    {
        if ($request->differentDelivery) {
            $request->validate([
                'delivery.address1' => 'required',
                'delivery.city' => 'required',
                'delivery.postal_code' => 'required',
                'delivery.telephone' => 'required',
            ]);
        }
        
        $order->address1 = $request->delivery['address1'] ?: auth()->user()->address1;
        $order->address2 = $request->delivery['address2'] ?: auth()->user()->address2;
        $order->city = $request->delivery['city'] ?: auth()->user()->city;
        $order->postal_code = $request->delivery['postal_code'] ?: auth()->user()->postal_code;
        $order->telephone = $request->delivery['telephone'] ?: auth()->user()->telephone;
        $order->save();
    }
}
