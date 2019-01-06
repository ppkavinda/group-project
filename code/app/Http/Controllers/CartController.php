<?php

namespace App\Http\Controllers;

// use App\cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = \Cart::content();
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
     * store the product in cart (sent from AddToCart)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        // return $product->previousSize;
        if ($request->quantity > $product->sizes{$request->size}) {
            abort(422, "Invalid quantity");
        }

        $cartItem = \Cart::add(
            $product->id,
            $product->name,
            $request->quantity,
            $product->price,
            ['img1' => $product->img1, 'img2' => $product->img2, 'img3' => $product->img3, 'size' => $request->size]
        );

        // switch ($product->category_id) {
        // case 4:
        // DB::table('products')->where('id', '=', $product->id)->decrement('amount', $request->quantity);
        // DB::table('products')->where('id', '=', $product->id)->increment('reserved', $request->quantity);
        $product->sizes->decrement($request->size, $request->quantity);
        $product->sizes->increment('reserved' . $request->size, $request->quantity);
        // break;
        // }

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
     * update a cart item (sent from CartModel)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $previousItem = \Cart::get($rowId);
        $product = Product::find($previousItem->id);

        if ($request->quantity > $product->amount) {
            abort(422, 'Invalid quantity');
        }

        $increment = $request->quantity - $previousItem->qty;

        $updated = \Cart::update($rowId, $request->quantity);

        // DB::table('products')->where('id', '=', $previousItem->id)->decrement('amount', $increment);
        // DB::table('products')->where('id', '=', $previousItem->id)->increment('reserved', $increment);
        
        // switch ($product->category_id) {
        // case 4:
        $product->sizes->decrement($request->size, $increment);
        $product->sizes->increment('reserved' . $request->size, $increment);
        // break;

        // }

        return ['cart' => ['count' => \Cart::count(), 'updated' => $updated]];
    }

    /**
     * remove product from cart
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $rowId)
    {
        $deleted = \Cart::get($rowId);
        $product = Product::find($deleted->id);
        // return $product->sizes{$deleted->options->size};

        // DB::table('products')->where('id', '=', $deleted->id)->increment('amount', $deleted->qty);
        // DB::table('products')->where('id', '=', $deleted->id)->decrement('reserved', $deleted->qty);

        // switch ($product->category_id) {
        // case 4:
        $product->sizes->increment($deleted->options->size, $deleted->qty);
        $product->sizes->decrement('reserved' . $deleted->options->size, $deleted->qty);
        // }
        
        \Cart::remove($rowId);

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return back();
    }
}
