<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")
            ->only(['store', 'index', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $idNo= auth()->user()->id;
        $posts = Product::where('user_id', $idNo)->get();
        $postsCount= Product::count();
        return view('profile.viewAdds', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(implode(" ",$request->sizes));
        $product = new Product;
        $size = implode(",", $request->sizes);
        $product::create([
            'name'=> $request['name'],
            'price' => $request['price'],
            'amount' => $request['amount'],
            'description' => $request['details'],
            'user_id'=> auth()->user()->id,
            'img1' => request()->image->store('img/product', 'public'),
            'discount'=> $request['discount'],
            'category_id' => $request['kind'],
            'kind'=> $request['category'],
            'type' => $request['type'],
            'sizes' => $size
        ]);
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('shop.products.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $productId)
    {
        $productId->update([
            'description' => $request['addDetails'],
            'price'=> $request['price'],
            'discount'=> $request['discount'],
            'amount' => $request['amount']
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $productId)
    {
        $productId->delete();
        return redirect()->back();
    }

    //get all product
    public function allAdvertisements(Request $request)
    {
        $addPosts = Product::get();
        $category_id = 0;
        $latest = Product::latest()->limit(2)->get();
        return view('shop.mens', ['addPosts'=> $addPosts,'category_id'=>$category_id, 'latest'=> $latest]);
    }

    //get specific category and type product
    public function viewKindAdvertisements(Request $request, $kind, $type, $category_id)
    {
        $addPosts = Product::where('kind', $kind)->where('type', $type)->get();
        return view('shop.mens', ['addPosts'=>$addPosts, 'category_id'=>$category_id]);
    }

    //get all product in this category
    public function viewAdvertisements(Request $request, $category_id)
    {
        $addPosts= Product::where('category_id', $category_id)->get();
        return view('shop.mens', ['addPosts'=>$addPosts,'category_id'=>$category_id]);
    }

    //get spices
    public function viewOnlyKindAdvertisements(Request $request, $kind, $category_id)
    {
        $addPosts = Product::where('kind', $kind)->get();
        return view('shop.mens', ['addPosts'=>$addPosts, 'category_id'=>$category_id]);
    }

    //get quick view
    public function quickViewAdvertisement(Request $request, Product $product)
    {
        $post = $product;
        $user = $product->user;
        $sameKindOfProduct = Product::where('kind', $post[0]['kind'])->get();

        return view('shop.products.single', ['product' => $product, 'user'=>$user, 'sameKindOfProduct'=>$sameKindOfProduct]);
    }

    //price range
    public function priceRange(Request $request)
    {
        $priceFrom = $request['fromValue'];
        $priceTo = $request['toValue'];
        $category = $request['category'];
        $category_id = 0;
        if ($category=="All") {
            $category_id=0;
        } elseif ($category=="Clothes") {
            $category_id= 1;
        } elseif ($category=="Shoes and Slippers") {
            $category_id=5;
        } elseif ($category=="Soap") {
            $category_id=3;
        } elseif ($category=="Spices") {
            $category_id=4;
        } elseif ($category=="Masks") {
            $category_id=2;
        }
        if ($category_id==0) {
            $addPosts = Product::where('price', '>=', $priceFrom)->where('price', '<=', $priceTo)->get();
        } else {
            $addPosts = Product::where('category_id', $category_id)->where('price', '>=', $priceFrom)->where('price', '<=', $priceTo)->get();
        }
        return view('shop.mens', ['addPosts'=> $addPosts, 'category_id'=>$category_id]);
    }
}
