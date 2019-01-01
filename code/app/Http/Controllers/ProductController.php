<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $idNo= auth()->user()->id;
        $posts = Product::where('user_id',$idNo)->get();
        $postsCount= Product::count();
        return view('profile.viewAdds',['posts'=>$posts]);
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
        $product = new Product;
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
            'sizes' => $request['sizes']
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
    public function destroy(Request $request, Product $productId){
        $productId->delete();
        return redirect()->back();
    }

    public function viewKindAdvertisements(Request $request, $kind, $type){
        return view('shop.mens',['kind'=>$kind, 'type'=>$type]);
    }
    public function viewAdvertisements(Request $request, $category_id){
        $addPosts= Product::where('category_id',$category_id)->get();
        return view('shop.mens',['addPosts'=>$addPosts,'category_id'=>$category_id]);
    }
}
