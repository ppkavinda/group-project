<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // dd(\Cart::count());
    }
    public function index()
    {
        if (\Cart::count() < 1) {
            return redirect('/products/1');
        }

        $successful = false;

        if (request()->order_id) {
            $successful = true;
        }
        return view('shop.cart.checkout', compact('successful'));
    }
    public function success(Request $request)
    {
        \Cart::destroy();

        $order = Order::with('products')->find($request->order_id);
        // dd($order->products[0]->pivot);

        return view('shop.cart.success', compact('order'));
    }
    public function cancel(Request $request)
    {
        dd('cancel', $request);
    }
    
    /**
     * store the payment & order data
     * after payment is completed
     * triggerd by payhere
     */
    public function notify(Request $request)
    {
        $request->validate([
            'merchant_id' => 'required',
            'order_id' => 'required',
            'payment_id' => 'required',
            'payhere_amount' => 'required',
            'payhere_currency' => 'required',
            'status_code' => 'required',
            'md5sig' => 'required',
        ]);

        $md5sig = $request->$md5sig;

        $local_md5sig = strtoupper(
            md5(
                $request->merchant_id . $request->order_id .
                $request->payhere_amount .
                $request->payhere_currency .
                $request->status_code . strtoupper(md5('honda1'))
            )
        );
        if (($local_md5sig != $md5sig) or ($request->status_code != 2)) {
            return;
        }

        DB::transaction(function () {
            $order = Order::find($request->order_id);
            $order->payment_id = $request->payment_id;
            $order->status = 1; // ( placed & payed )

            $payment = Payment::create([
                'id' => $request->payment_id,
                'amount' => $request->payhere_amount,
                'currency_' => $request->payhere_currency,
                'status_code' => $request->status_code,
                'user_id' => auth()->id(),
                'order_id' => $request->order_id,
            ]);
        });
    }

    /**
     * store the user's data before place an order
     */
    public function storeDetails(Request $request)
    {
        $request->validate([
            'address1' => 'required|min:10',
            'city' => 'required|string',
            'postal_code' => ['required', 'min:5', 'max:5', 'regex:/^[0-9]{5}$/u'],
            'telephone' => ['required', 'min:9', 'regex:/^((0{2}|\+)\d{11}|0\d{9})$/'],
        ]);

        $user = auth()->user();
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->telephone = $request->telephone;
        $user->save();
        // dd(auth()->user());
        return $request;
    }
}
