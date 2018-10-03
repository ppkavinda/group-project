@extends('shop.master')
@section('content')

@include('shop.partials.smallHeader', ['path' => $product->category->title])

<div class="banner-bootom-w3-agileits">
	<div class="container">
        <div class="row">
            <div class="col-md-4 single-right-left ">
                @include('shop.products.slider')
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
              @include('shop.products.details')
            </div>
        </div>
        <div class="responsive_tabs_agileits"> 
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Description</li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Reviews</li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Information</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
                        <span class="resp-arrow"></span>Description
                    </h2>
                    <div class="tab1 resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">
                        <div class="single_page_agile_its_w3ls">
                            {{ $product->description }}
                        </div>
                    </div>
                        <!--//tab_one-->
                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Reviews</h2>
                    @include('shop.products.reviews')
                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Information</h2>
                    <div class="tab3 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="single_page_agile_its_w3ls">
                            <h6>Big Wing Sneakers (Navy)</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit
                                 ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et 
                                 dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                            <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, 
                                molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                                lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        @include('shop.partials.latestProducts')
    </div>
 </div>
@endsection