<?php

namespace App\Http\Controllers;

use \App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        //      first_name
        //      last_name
        //      user address
        //      city
        //      telephone
        //      postal_code
        //      price
        //      amount
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
        DB::transaction(function () use ($request) {
            $order = Order::create([
                'user_id' => auth()->id(),
                'address1' => $request->delivery['address1'],
                'address2' => $request->delivery['address2'],
                'postal_code' => $request->delivery['postal_code'],
                'telephone' => $request->delivery['telephone'],
                'status' => 0,
            ]);

            $products = [];
            
            foreach (\Cart::content() as $key => $value) {
                array_push($products, $value->id);
            }

            $order->products()->attach($products);
        });

        return $request->all();
    }
}
