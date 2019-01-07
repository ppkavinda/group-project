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

    public function view_Order_table(){
        $orders=\App\Order::all();
      //p dd($orders);
        return view('admin.order.view')->with(compact('orders'));

    }

    public function search(Request $request)
    {
        $search =$request->get("search");
        $orders=\App\Order::where('orders.id','like','%'.$search.'%')
                ->orWhere('orders.status','like','%'.$search.'%')
                ->orWhere('orders.address1','like','%'.$search.'%')
                ->orWhere('orders.address2','like','%'.$search.'%')
                ->orWhere('orders.city','like','%'.$search.'%')
                ->orWhere('orders.postal_code','like','%'.$search.'%')
                ->orWhere('orders.telephone','like','%'.$search.'%')
                ->orWhere('orders.payment_id','like','%'.$search.'%')
                ->orWhere('orders.user_id','like','%'.$search.'%')
                ->orWhere('orders.created_at','like','%'.$search.'%')
                ->get(); 
       // dd($orders);
        return view('admin.order.view',compact('orders'));
    }
    
    public function view_order_product_table()
    {
        $order_products = DB::table('order_product')
                    ->join('orders', 'order_product.order_id', '=', 'orders.id')
                    ->join('products', 'order_product.product_id', '=', 'products.id')
                    ->select('order_product.id', 'order_product.order_id', 'order_product.product_id','order_product.amount','order_product.price','products.*','orders.*')
                    ->get();
        //dd($order_products);
        return view('admin.order.order_product')->with(compact('order_products'));
    }
}
