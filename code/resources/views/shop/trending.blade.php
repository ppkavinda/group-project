@extends('shop.master')
@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h4>Trending Products
            </h4>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="/shop">Shop</a><i>|</i></li>
								<li>Trending Products
                                </li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="banner-bootom-w3-agileits">
	<div class="container">
        <div class="row">
            <!-- mens -->
            <div class="col-md-4 products-left">
                <div class="css-treeview">
                    <h4>Categories</h4>
                    <ul class="tree-list-pad">
                        <li><a href="/categories">All</a></li>
                        <li><input type="checkbox" checked="checked" id="item-0"><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Clothes</label>
                            <ul>
                                <li><input type="checkbox" id="item-0-0"><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Men</label>
                                    <ul>
                                        <li><a href="/categories/{{'Men'}}/{{'Shirt'}}/{{'1'}}">Shirts</a></li>
                                        <li><a href="/categories/{{'Men'}}/{{'T-shirt'}}/{{'1'}}">T-Shirts</a></li>
                                        <li><a href="/categories/{{'Men'}}/{{'Male-Trouser'}}/{{'1'}}">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-1"><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Women</label>
                                    <ul>
                                        <li><a href="/categories/{{'Women'}}/{{'Shirt'}}/{{'1'}}">Shirts</a></li>
                                        <li><a href="/categories/{{'Women'}}/{{'Blouse'}}/{{'1'}}">Blouses</a></li>
                                        <li><a href="/categories/{{'Women'}}/{{'Skirt'}}/{{'1'}}">Skirts</a></li>
                                        <li><a href="/categories/{{'Women'}}/{{'frock'}}/{{'1'}}">Frocks</a></li>
                                        <li><a href="/categories/{{'Women'}}/{{'Women-Trouser'}}/{{'1'}}">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-2"><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid(Male)</label>
                                    <ul>
                                        <li><a href="/categories/{{'Children(Male)'}}/{{'Shirt'}}/{{'1'}}">Shirts</a></li>
                                        <li><a href="/categories/{{'Children(Male)'}}/{{'T-Shirt'}}/{{'1'}}">T-Shirts</a></li>
                                        <li><a href="/categories/{{'Children(Male)'}}/{{'Male-Trouser'}}/{{'1'}}">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-3"><label for="item-0-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid(Female)</label>
                                    <ul>
                                        <li><a href="/categories/{{'Chlidren(Female)'}}/{{'Shirt'}}/{{'1'}}">Shirts</a></li>
                                        <li><a href="/categories/{{'Chlidren(Female)'}}/{{'Blouse'}}/{{'1'}}">Blouses</a></li>
                                        <li><a href="/categories/{{'Chlidren(Female)'}}/{{'frock'}}/{{'1'}}">Frocks</a></li>
                                        <li><a href="/categories/{{'Chlidren(Female)'}}/{{'Skirt'}}/{{'1'}}">Skirts</a></li>
                                        <li><a href="/categories/{{'Chlidren(Female)'}}/{{'Women-Trouser'}}/{{'1'}}">Trousers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" id="item-1" checked="checked"><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Shoes and Slippers</label>
                            <ul>
                                <li><input type="checkbox" checked="checked" id="item-1-0"><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Men</label>
                                    <ul>
                                        <li><a href="/categories/{{'Men'}}/{{'Slippers'}}/{{'5'}}">Slippers</a></li>
                                        <li><a href="/categories/{{'Men'}}/{{'Shoes'}}/{{'5'}}">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-1"><label for="item-1-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Women</label>
                                    <ul>
                                        <li><a href="/categories/{{'Women'}}/{{'Slippers'}}/{{'5'}}">Slippers</a></li>
                                        <li><a href="/categories/{{'Men'}}/{{'Shoes'}}/{{'5'}}">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-2"><label for="item-1-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid(Male)</label>
                                    <ul>
                                        <li><a href="/categories/{{'Children(Male)'}}/{{'Slippers'}}/{{'5'}}">Slippers</a></li>
                                        <li><a href="/categories/{{'Children(Male)'}}/{{'Shoes'}}/{{'5'}}">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-3"><label for="item-1-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid(Female)</label>
                                    <ul>
                                        <li><a href="/categories/{{'Children(Female)'}}/{{'Slippers'}}/{{'5'}}">Slippers</a></li>
                                        <li><a href="/categories/{{'Children(Female)'}}/{{'Shoes'}}/{{'5'}}">Shoes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-2"><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Soap</label>
                            <ul>
                                <li><input type="checkbox" id="item-2-0"><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Baby Soap</label>
                                    <ul>
                                        <li><a href="/categories/{{'Baby'}}/{{'Other'}}/{{'3'}}">Other</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-1"><label for="item-2-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Cleaning Soap</label>
                                    <ul>
                                        <li><a href="/categories/{{'Cleaning'}}/{{'Bar Soap'}}/{{'3'}}">Bar</a></li>
                                        <li><a href="/categories/{{'Cleaning'}}/{{'Powder'}}/{{'3'}}">Powder</a></li>
                                        <li><a href="/categories/{{'Cleaning'}}/{{'Other'}}/{{'3'}}">Other</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-2"><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kitchen</label>
                                    <ul>
                                        <li><a href="/categories/{{'Kitchen'}}/{{'Bar Soap'}}/{{'3'}}">Bar</a></li>
                                        <li><a href="/categories/{{'Kitchen'}}/{{'Powder'}}/{{'3'}}">Powder</a></li>
                                        <li><a href="/categories/{{'Kitchen'}}/{{'Other'}}/{{'3'}}">Other</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-3"><label for="item-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Spices</label>
                            <ul>
                                <li><a href="/categories/{{'Turmeric'}}/{{'4'}}">Turmeric</a></li>
                                <li><a href="/categories/{{'Clove'}}/{{'4'}}">Clove</a></li>
                                <li><a href="/categories/{{'Cinnamon'}}/{{'4'}}">Cinnamon</a></li>
                                <li><a href="/categories/{{'Pepper'}}/{{'4'}}">Pepper</a></li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-4"><label for="item-4"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Masks</label>
                            <ul>
                                <li><input type="checkbox" id="item-4-0"><label for="item-4-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Wood</label>
                                    <ul>
                                        <li><a href="/categories/{{'Wood'}}/{{'Traditional'}}/{{'2'}}">Traditional</a></li>
                                        <li><a href="/categories/{{'Wood'}}/{{'Other'}}/{{'2'}}">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-1"><label for="item-4-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Paper</label>
                                    <ul>
                                        <li><a href="/categories/{{'Paper'}}/{{'Traditional'}}/{{'2'}}">Traditional</a></li>
                                        <li><a href="/categories/{{'Paper'}}/{{'Other'}}/{{'2'}}">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-2"><label for="item-4-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Plastic</label>
                                    <ul>
                                        <li><a href="/categories/{{'Plastic'}}/{{'Traditional'}}/{{'2'}}">Traditional</a></li>
                                        <li><a href="/categories/{{'Plastic'}}/{{'Other'}}/{{'2'}}">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-3"><label for="item-4-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ploythene</label>
                                    <ul>
                                        <li><a href="/categories/{{'Ploythene'}}/{{'Traditional'}}/{{'2'}}">Traditional</a></li>
                                        <li><a href="/categories/{{'Ploythene'}}/{{'Other'}}/{{'2'}}">Other</a></li> 
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span>Price Range</span></h5>
                <hr>
                <form action="/categories/priceRange" method="post" class="form-inline" onsubmit="return checkForm(this);">
                @csrf
                    <div class="form-group mb-1">
                        <b>&nbspFrom&nbsp</b>
                        <label for="staticEmail2" class="sr-only">From</label>
                        <input type="number" class="form-control" id="selectFrom" name="fromValue" min="0" required>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <b>&nbspTo&nbsp</b>
                        <label for="inputPassword2" class="sr-only">To</label>
                        <input type="number" class="form-control" id="selectTo" name="toValue" required>
                    </div>
                    <div class="form-group mx-sm-3 mb-1">
                    <label for="type" id="labels">Category</label>
                        <select class="form-control" id="selectCategory" name="category">
                        <option>All</option>
                        <option>Clothes</option>
                        <option>Shoes and Slippers</option>
                        <option>Soap</option>
                        <option>Spices</option>
                        <option>Masks</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">View</button>
                </form>
                
                @if(count($allTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Products</h1></center>
                @endif
                <div class="row">
                    @for($x=0; $x<count($allTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$allTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$allTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$allTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$allTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$allTopTrending[$x][0]['id']}}">{{$allTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$allTopTrending[$x][0]['price']-$allTopTrending[$x][0]['discount']}}</span>
                                        @if($allTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$allTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <hr>
                @if(count($clothesTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Clothes</h1></center>
                @endif
                <div class="row">
                    @for($x=0; $x<count($clothesTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$clothesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$clothesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$clothesTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$clothesTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$clothesTopTrending[$x][0]['id']}}">{{$clothesTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$clothesTopTrending[$x][0]['price']-$clothesTopTrending[$x][0]['discount']}}</span>
                                        @if($clothesTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$clothesTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                @if(count($masksTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Masks</h1></center>
                @endif
                <div class=row>
                    @for($x=0; $x<count($masksTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$masksTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$masksTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$masksTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$masksTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$masksTopTrending[$x][0]['id']}}">{{$masksTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$masksTopTrending[$x][0]['price']-$masksTopTrending[$x][0]['discount']}}</span>
                                        @if($masksTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$masksTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                @if(count($shoesTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Shoes And Slippers</h1></center>
                @endif
                <div class=row>
                    @for($x=0; $x<count($shoesTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$shoesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$shoesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$shoesTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$shoesTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$shoesTopTrending[$x][0]['id']}}">{{$shoesTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$shoesTopTrending[$x][0]['price']-$shoesTopTrending[$x][0]['discount']}}</span>
                                        @if($shoesTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$shoesTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                @if(count($spicesTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Spices</h1></center>
                @endif
                <div class=row>
                    @for($x=0; $x<count($spicesTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$spicesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$spicesTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$spicesTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$spicesTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$spicesTopTrending[$x][0]['id']}}">{{$spicesTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$spicesTopTrending[$x][0]['price']-$spicesTopTrending[$x][0]['discount']}}</span>
                                        @if($spicesTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$spicesTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                @if(count($soapTopTrending)!=0)
                    <center><h1>Our <b>Trending</b> Soaps</h1></center>
                @endif
                <div class=row>
                    @for($x=0; $x<count($soapTopTrending); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$soapTopTrending[$x][0]['img1']}}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{$soapTopTrending[$x][0]['img1']}}" alt="" class="pro-image-back img-fluid" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$soapTopTrending[$x][0]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$soapTopTrending[$x][0]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="/quickView/{{$soapTopTrending[$x][0]['id']}}">{{$soapTopTrending[$x][0]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$soapTopTrending[$x][0]['price']-$soapTopTrending[$x][0]['discount']}}</span>
                                        @if($soapTopTrending[$x][0]['discount']!=null)
                                        <del>LKR.{{$soapTopTrending[$x][0]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
	</div>
</div>
<br>

<script type="text/javascript">
    function checkForm(form){
        if(Number(form.fromValue.value)>Number(form.toValue.value)){
            alert("Error: To value should greater than From Value");
            return false;
        }
        else{
            return true;
        }
    }
</script>
@endsection