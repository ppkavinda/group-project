@extends('shop.master')
@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>@if($category_id==1)
                {{"Clothes"}}
                @elseif($category_id==2)
                {{"Masks"}}
                @elseif($category_id==3)
                {{"Soap"}}
                @elseif($category_id==4)
                {{"Spices"}}
                @elseif($category_id==5)
                {{"Shoes"}}
                @elseif($category_id==0)
                {{"All"}}
            @endif
            </h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="/shop">Shop</a><i>|</i></li>
								<li>@if($category_id==1)
                                    {{"Clothes"}}
                                    @elseif($category_id==2)
                                    {{"Masks"}}
                                    @elseif($category_id==3)
                                    {{"Soap"}}
                                    @elseif($category_id==4)
                                    {{"Spices"}}
                                    @elseif($category_id==5)
                                    {{"Shoes"}}
                                    @elseif($category_id==0)
                                    {{"All"}}
                                @endif</li>
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
                        <label for="staticEmail2" class="sr-only">From(LKR)</label>
                        <input type="number" class="form-control" id="selectFrom" name="fromValue" min="0" required>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <b>&nbspTo&nbsp</b>
                        <label for="inputPassword2" class="sr-only">To(LKR)</label>
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
                <!-- <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sort By</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Default</option>
                            <option value="null">Name(A - Z)</option> 
                            <option value="null">Name(Z - A)</option>
                            <option value="null">Price(High - Low)</option>
                            <option value="null">Price(Low - High)</option>	
                            <option value="null">Model(A - Z)</option>
                            <option value="null">Model(Z - A)</option>					
                        </select>
                    </div>
                    <div class="sorting">
                        <h6>Showing</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option> 
                            <option value="null">28</option>					
                            <option value="null">35</option>								
                        </select>
                    </div>
                </div> -->
                <div class="men-wear-top">
                    <div id="top" class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider3">
                            <li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
                                <img class="img-responsive" src="images/banner2.jpg" alt=" ">
                            </li>
                            <li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
                                <img class="img-responsive" src="images/banner5.jpg" alt=" ">
                            </li>
                            <li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
                                <img class="img-responsive" src="images/banner2.jpg" alt=" ">
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="images/bb2.jpg" alt=" ">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    @for($x=0; $x<count($addPosts); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{$addPosts[$x]['img1']}}" alt="" class="pro-image-front img-fluid" style="width:200px; height:200px;">
                                    <img src="/storage/{{$addPosts[$x]['img1']}}" alt="" class="pro-image-back img-fluid" style="width:200px; height:200px;">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/quickView/{{$addPosts[$x]['id']}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    @if(date_diff(date_create(date('Y-m-d')),$addPosts[$x]['created_at'])->format("%a")< 7)
                                        <span class="product-new-top">New</span>
                                    @endif
                                </div>
                                <div class="item-info-product ">
                                    <h3><a href="/quickView/{{$addPosts[$x]['id']}}">{{$addPosts[$x]['name']}}</a></h3>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR.{{$addPosts[$x]['price']-$addPosts[$x]['discount']}}</span>
                                        @if($addPosts[$x]['discount']!=null)
                                        <del>LKR.{{$addPosts[$x]['price']}}</del>
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
<!-- <div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid row">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
			</div>

		</div>
</div> -->
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