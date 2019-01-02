<?php

namespace App\Http\Controllers;

use App\Post;
use App\Course;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function shop(Request $request)
    {
        $products = Product::search($request->q)->get();

        return view('shop.search.index', compact('products'));
    }

    public function study(Request $request)
    {
        $courses = Course::search($request->q)->get();
        $posts = Post::search($request->q)->get();

        return view('study.search.index', compact('courses', 'posts'));
    }
}
