@extends('shop.master')
@section('content')
<div class="container">
<ul class="row">
    @foreach($products as $product)
    <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <img src="{{ $product['img1']}}" alt="" class="pro-image-front img-fluid" style="width:200px; height:200px;">
                    <img src="{{$product['img1']}}" alt="" class="pro-image-back img-fluid" style="width:200px; height:200px;">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                        <a href="{{ route('products.show', $product->id)}}" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <h4><a href="{{ route('products.show', $product->id) }}">{{$product['name']}}</a></h4>
                    <div class="info-product-price">
                        <span class="item_price">LKR {{ $product['price']-$product['discount'] * .01 }}</span>
                        @if($product['discount']!=null)
                        <del>Rs.{{$product['price']}}</del>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach 
</ul>
</div>
@endsection