@extends('shop.master')
@section('content')

@include('shop.partials.smallHeader', ['path' => $product->category->title])

<div class="banner-bootom-w3-agileits">
	<div class="container">
        {{-- <div class="row">
            <div class="col-md-4 single-right-left ">
                @include('shop.products.slider')
            <product-slider initial-imgs='{{ json_encode([$product->img1, $product->img2, $product->img3]) }}'></product-slider>
@include('shop.products.details')
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
              @include('shop.products.details')
            </div>
        </div> --}}
        <h2>{{ $product->name }}</h2>
        <div>
            <span style="font-style: italic;">product by </span>
            <strong>
                {{ $product->user->name }} 
            </strong>
            <span style="font-style:italic; padding-left:2em">published</span> 
            <strong>
                {{ $product->created_at->diffForHumans() }}
            </strong>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br>
                <img class="img-fluid" src="/storage/{{ $product->img1 }}" height="200px" width="auto" alt="Computer Hope">
            </div>

            @include('shop.products.details')

        </div>
        <div class="responsive_tabs_agileits"> 
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li id="description-tab" class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                        <a href="#/description" class="text-dark">Description</a>
                    </li>
                    <li id="reviews-tab" class="resp-tab-item" aria-controls="tab_item-1" role="tab">
                        <a href="#/reviews" class="text-dark">Reviews</a>
                    </li>
                    {{-- <li id="information-tab" class="resp-tab-item" aria-controls="tab_item-2" role="tab">
                        <a href="#/information" class="text-dark">Information</a>
                    </li> --}}
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    {{-- <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
                        <span class="resp-arrow"></span>Description
                    </h2> --}}
                    
                    <div id="description" class="tab1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0">
                        <div class="single_page_agile_its_w3ls">
                            {{ $product->description }}
                        </div>
                    </div>
                        <!--//tab_one-->
                    {{-- <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1">
                        <span class="resp-arrow"></span>Reviews
                    </h2> --}}

                    @include('shop.products.reviews')
{{--  --}}
                    {{-- <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2">
                        <span class="resp-arrow"></span>Information
                    </h2> --}}
{{-- 
                    <div id="information" class="tab3 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="single_page_agile_its_w3ls">
                            <h6>Big Wing Sneakers (Navy)</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit
                                 ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et 
                                 dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                            <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, 
                                molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                                lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        </div>
                    </div> --}}
                </div>
            </div>	
        </div>
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
            <h3 class="wthree_text_info">Related <span>products</span></h3>
            <hr>
        </div>
	</div>
        <div class="container">
            <div class="row">
                <?php
                    $count=0;
                    if(count($sameKindOfProduct)<=4){
                        $count=count($sameKindOfProduct);
                    }else{
                        $count = 4;
                    }
                ?>
                @for($x=0; $x<$count; $x++)
                    @if($post[0]['id'] != $sameKindOfProduct[$x]['id'])
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$sameKindOfProduct[$x]['img1']}}" alt="" class="pro-image-front img-fluid">
                                    <img src="/storage/{{$sameKindOfProduct[$x]['img1']}}" alt="" class="pro-image-back img-fluid">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$sameKindOfProduct[$x]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$sameKindOfProduct[$x]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$sameKindOfProduct[$x]['id']}}">{{$sameKindOfProduct[$x]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">Rs.{{$sameKindOfProduct[$x]['price']-$sameKindOfProduct[$x]['discount']}}</span>
                                        @if($sameKindOfProduct[$x]['discount']!=null)
                                        <del>Rs.{{$sameKindOfProduct[$x]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
        @if(! $count)
            {{-- @include('shop.partials.latestProducts') --}}
        @endif
    </div>
 </div>
@endsection
