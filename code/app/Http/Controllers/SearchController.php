<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::search($request->q)->get();

        return view('shop.search.index', compact('products'));
    }
}
