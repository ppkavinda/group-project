<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function viewLatestTwoProduct(Request $request){
        $latest = Product::latest()->limit(2)->get();
        return view('shop.index');
    }
}
