<?php

namespace App\Http\Controllers;

use DB;
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
        $posts = auth()->user()->products;
        $sizes = array();
        for ($x=0; $x<count($posts); $x++) {
            $category_id = $posts[$x]['category_id'];
            if ($category_id==1) {
                $sizes[$x]=\App\Cloth::where('product_id', $posts[$x]['id'])->get();
            } elseif ($category_id==2) {
                $sizes[$x]=\App\Mask::where('product_id', $posts[$x]['id'])->get();
            } elseif ($category_id==3) {
                $sizes[$x]=\App\Soap::where('product_id', $posts[$x]['id'])->get();
            } elseif ($category_id==4) {
                $sizes[$x]=\App\Spice::where('product_id', $posts[$x]['id'])->get();
            } elseif ($category_id==5) {
                $sizes[$x]=\App\Shoe::where('product_id', $posts[$x]['id'])->get();
            }
        }
        //dd($sizes[2]);
        return view('profile.viewAdds', ['posts'=>$posts, 'sizes'=>$sizes]);
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
    public function store(Request $request, $id)
    {
        $product = Product::create([
            'name'=> $request['name'],
            'price' => $request['price'],
            'description' => $request['details'],
            'user_id'=> auth()->user()->id,
            'img1' => request()->image->store('img/product', 'public'),
            'discount'=> $request['discount'],
            'category_id' => $id,
            'kind'=> $request['category'],
            'type' => $request['type'],
        ]);
        if ($id=='1') {
            $cloth=\App\Cloth::create([
                'product_id'=> $product->id,
                'size(XS)' => $request['sizesXS'],
                'size(S)' => $request['sizesS'],
                'size(M)' => $request['sizesM'],
                'size(L)' => $request['sizesL'],
                'size(XL)' => $request['sizesXL'],
                'size(XXL)' => $request['sizesXXL']
            ]);
        } elseif ($id=='2') {
            if ($request['sizes']=="25*25") {
                $mask=\App\Mask::create([
                    'product_id'=> $product->id,
                    'size(25*25)'=> $request['amount']
                ]);
            } elseif ($request['sizes']=="50*50") {
                $mask=\App\Mask::create([
                    'product_id'=> $product->id,
                    'size(50*50)'=> $request['amount']
                ]);
            } elseif ($request['sizes']=="60*60") {
                $mask=\App\Mask::create([
                    'product_id'=> $product->id,
                    'size(60*60)'=> $request['amount']
                ]);
            }
        } elseif ($id=='3') {
            if ($request['sizes']=="50g") {
                $soap=\App\Soap::create([
                    'product_id'=> $product->id,
                    'size(50g)'=> $request['amount']
                ]);
            } elseif ($request['sizes']=="100g") {
                $soap=\App\Soap::create([
                    'product_id'=> $product->id,
                    'size(100g)'=> $request['amount']
                ]);
            } elseif ($request['sizes']=="200g") {
                $soap=\App\Soap::create([
                    'product_id'=> $product->id,
                    'size(200g)'=> $request['amount']
                ]);
            }
        } elseif ($id=='4') {
            $spice=\App\Spice::create([
                'product_id'=> $product->id,
                'size(100g)'=> $request['sizes100'],
                'size(200g)'=> $request['sizes200'],
                'size(400g)'=> $request['sizes400']
            ]);
        } elseif ($id=='5') {
            $shoe=\App\Shoe::create([
                'product_id'=> $product->id,
                'size(6)'=>$request['sizes6'],
                'size(7)'=>$request['sizes7'],
                'size(8)'=>$request['sizes8'],
                'size(9)'=>$request['sizes9'],
                'size(10)'=>$request['sizes10'],
                'size(11)'=>$request['sizes11']
            ]);
        }
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
        $category_id = $productId->category_id;
        $id = $productId->id;
        $productId->update([
            'description' => $request['addDetails'],
            'price'=> $request['price'],
            'discount'=> $request['discount'],
        ]);
        if ($category_id==1) {
            \App\Cloth::where('product_id', $id)->update([
                'size(XS)' => $request['size(XS)'],
                'size(S)' => $request['size(S)'],
                'size(M)' => $request['size(M)'],
                'size(L)' => $request['size(L)'],
                'size(XL)' => $request['size(XL)'],
                'size(XXL)' => $request['size(XXL)']
            ]);
        } elseif ($category_id==2) {
            \App\Mask::where('product_id', $id)->update([
                'size(25*25)'=> $request['size(25*25)'],
                'size(50*50)' => $request['size(50*50)'],
                'size(60*60)' => $request['size(60*60)']
            ]);
        } elseif ($category_id==3) {
            \App\Soap::where('product_id', $id)->update([
                'size(50g)'=> $request['size(50g)'],
                'size(100g)' => $request['size(100g)'],
                'size(200g)' => $request['size(200g)']
            ]);
        } elseif ($category_id==4) {
            \App\Spice::where('product_id', $id)->update([
                'size(100g)'=> $request['size(100g)'],
                'size(200g)' => $request['size(200g)'],
                'size(400g)' => $request['size(400g)']
            ]);
        } elseif ($category_id==5) {
            \App\Shoe::where('product_id', $id)->update([
                'size(6)'=> $request['size(6)'],
                'size(7)' => $request['size(7)'],
                'size(8)' => $request['size(8)'],
                'size(9)'=> $request['size(9)'],
                'size(10)' => $request['size(10)'],
                'size(11)' => $request['size(11)']
            ]);
        }
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
        $category_id = $productId->category_id;
        $id = $productId->id;

        if ($category_id==1) {
            \App\Cloth::where('product_id', $id)->delete();
        } elseif ($category_id==2) {
            \App\Mask::where('product_id', $id)->delete();
        } elseif ($category_id==3) {
            \App\Soap::where('product_id', $id)->delete();
        } elseif ($category_id==4) {
            \App\Spice::where('product_id', $id)->delete();
        } elseif ($category_id==5) {
            \App\Shoe::where('product_id', $id)->delete();
        }
        return redirect()->back();
    }

    //get all product
    public function allAdvertisements(Request $request)
    {
        $addPosts = Product::paginate(9);
        $category_id = 0;
        return view('shop.mens', ['addPosts'=> $addPosts,'category_id'=>$category_id]);
    }

    //get specific category and type product
    public function viewKindAdvertisements(Request $request, $kind, $type, $category_id)
    {
        $addPosts = Product::where('kind', $kind)->where('type', $type)->paginate(9);
        return view('shop.mens', ['addPosts'=>$addPosts, 'category_id'=>$category_id]);
    }

    //get all product in this category
    public function viewAdvertisements(Request $request, $category_id)
    {
        $addPosts= Product::where('category_id', $category_id)->paginate(9);
        return view('shop.mens', ['addPosts'=>$addPosts,'category_id'=>$category_id]);
    }

    //get spices
    public function viewOnlyKindAdvertisements(Request $request, $kind, $category_id)
    {
        $addPosts = Product::where('kind', $kind)->paginate(9);
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


    public function viewProducttable()
    {
        $products=\App\Product::get();
        //dd($products);
        return view('admin.product.view', compact('products'));
    }

    public function search(Request $request)
    {
        $search =$request->get("search");
        $products=\App\Product::where('products.id', 'like', '%'.$search.'%')
                ->orWhere('products.name', 'like', '%'.$search.'%')
                ->orWhere('products.price', 'like', '%'.$search.'%')
                ->get();
        //dd($products);
        return view('admin.product.view', compact('products'));
    }

    public function deleteProduct($id= null)
    {
        if (!empty($id)) {
            \App\Product::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Product : ' .$id.' deleted ');
        }
    }
    public function view_Product($id=null)
    {
        $products = Product::where(['id'=>$id])->first();

        //dd($products);
        return view('admin.product.index')->with(compact('products'));
    }
}
