<?php

namespace App\Http\Controllers;

// use App\cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct () {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = auth()->user()->cart()->get();
        return view('shop.cart.index', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => "max:$product->amount",
        ]);

        // auth()->user()->cart()->attach($product->id, [
        //     'quantity' => $request->quantity
        // ]);
        $cartItem = \Cart::add($product->id, $product->name, $request->quantity, $product->price);

        return $cartItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $updated = \Cart::update($rowId, $request->quantity);
        return ['cart' => ['count' => \Cart::count(), 'updated' => $updated]];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        return \Cart::remove($rowId);
    }
}
