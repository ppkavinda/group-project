<?php

namespace App\Http\Controllers;

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
        dd('success', $request);
    }
    public function cancel(Request $request)
    {
        dd('cancel', $request);
    }
    public function notify(Request $request)
    {
        dd('notify', $request);
    }
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
