@extends('shop.master')
@section('content')
{{dd($post)}}
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>@if($post[0]['category_id']==1)
                {{"Clothes"}}
                @elseif($post[0]['category_id']==2)
                {{"Masks"}}
                @elseif($post[0]['category_id']==3)
                {{"Soap"}}
                @elseif($post[0]['category_id']==4)
                {{"Spices"}}
                @elseif($post[0]['category_id']==5)
                {{"Shoes"}}
            @endif
            </h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="/shop">Shop</a><i>|</i></li>
								<li>@if($post[0]['category_id']==1)
                                    {{"Clothes"}}
                                    @elseif($post[0]['category_id']==2)
                                    {{"Masks"}}
                                    @elseif($post[0]['category_id']==3)
                                    {{"Soap"}}
                                    @elseif($post[0]['category_id']==4)
                                    {{"Spices"}}
                                    @elseif($post[0]['category_id']==5)
                                    {{"Shoes"}}
                                @endif</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br>
            <h3>{{$post[0]['name']}}</h3>
            <div><span style="font-style: italic; background:lightblue;">product by </span>{{$user[0]['name']}} <span style="font-style:italic; background:lightblue;">publish at</span> {{$post[0]['created_at']}}</div>
            <br>
            <img class="img-fluid" src="/storage/{{$post[0]['img1']}}" height="200px" width="auto" alt="Computer Hope">
        </div>
        <div class="col-md-6">
            <br>
            <div class="row">
                <div class="col-md-2">
                    <div class="item-info-product ">    
                        <div class="info-product-price">
                            <label for="price"><b>Price </b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="item-info-product ">    
                        <div class="info-product-price">
                            <span class="item_price" id="price">LKR.{{$post[0]['price']-$post[0]['discount']}}</span>
                            @if($post[0]['discount']!=null)
                            <del style="color:red;">LKR.{{$post[0]['price']}}</del>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="item-info-product ">    
                        <div class="info-product-price">
                            <label for="price"><b>Rating </b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="item-info-product ">    
                        <div class="info-product-price">
                            @for($x=0; $x< round($post[0]['ratings']); $x++)
                                <span class="fa fa-star" style="color:orange;"></span>
                            @endfor
                            @for($x=0; $x< round(5-$post[0]['ratings']); $x++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="item-info-product ">    
                        <div class="info-product-detail">
                            <label for="price"><b>Details </b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="item-info-product ">    
                        <div class="info-product-detail">
                            {{$post[0]['description']}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="item-info-product ">    
                        <div class="info-product-size">
                            <label for="price"><b>Available sizes </b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="item-info-product ">    
                        <div class="info-product-size">
                            {{$post[0]['sizes']}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="item-info-product ">    
                        <div class="info-product-amount">
                            <label for="price"><b>Available amount </b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="item-info-product ">    
                        <div class="info-product-amount">
                            @if($post[0]['amount']>10)
                            {{10}}
                            @else
                            {{$post[0]['amount']}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <form>
                @if($post[0]['category_id']!=4)
                    <div class="form-group row">
                        <label for="size" class="col-md-2 col-form-label"><b>Size</b></label>
                        <div class="col-md-">
                            <select class="form-control" id="size" name="sizes">
                                @for($x=0; $x< count(explode(",",$post[0]['sizes'])); $x++)
                                <option>{{explode(",",$post[0]['sizes'])[$x]}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                @endif
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label"><b>Quantity</b></label>
                    <div class="col-md-">
                    <input type="number" class="form-control" name="amount">
                    </div>
                </div>
                <center>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <input type="submit" name="submit" value="Add to cart" class="button">
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
            $count=0;
            if(count($sameKindOfProduct)<=5){
                $count=count($sameKindOfProduct);
            }else{
                $count = 5;
            }
        ?>
        @for($x=0; $x<$count; $x++)
            @if($post[0]['id'] != $sameKindOfProduct[$x]['id'])
                <div class="col-md-2 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/storage/{{$sameKindOfProduct[$x]['img1']}}" alt="" class="pro-image-front img-fluid" style="width:175px; height:175px;">
                            <img src="/storage/{{$sameKindOfProduct[$x]['img1']}}" alt="" class="pro-image-back img-fluid" style="width:175px; height:175px;">
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
                            <h3><a href="/quickView/{{$sameKindOfProduct[$x]['id']}}">{{$sameKindOfProduct[$x]['name']}}</a></h3>
                            <h4><a href="/quickView/{{$sameKindOfProduct[$x]['id']}}">Available Sizes :{{$sameKindOfProduct[$x]['sizes']}}</a></h4>
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
@endsection