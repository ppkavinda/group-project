@extends('shop.master')
@section('content')
<div class="container">
<ul class="row m-3">
    @foreach($products as $product)
    <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                <div class="men-thumb-item">
                    <img src="{{ '/storage/' . $product['img1']}}" alt="{{ $product->name }}" class="pro-image-front img-fluid">
                    <img src="{{ '/storage/' . $product['img1']}}" alt=" {{ $product->name }}" class="pro-image-back img-fluid">
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