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
                <!-- <div class="filter-price">
                    <h3>Filter By <span>Price</span></h3>
                        <ul class="dropdown-menu6">
                            <li>                
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 11.1111%; width: 66.6667%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 11.1111%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77.7778%;"></a></div>							
                                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
                            </li>			
                        </ul>
                </div> -->
                <div class="css-treeview">
                    <h4>Categories</h4>
                    <ul class="tree-list-pad">
                        <li><input type="checkbox" checked="checked" id="item-0"><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Clothes</label>
                            <ul>
                                <li><input type="checkbox" id="item-0-0"><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Men's Clothes</label>
                                    <ul>
                                        <li><a href="/categories/{{'Men'}}/{{'Shirt'}}">Shirts</a></li>
                                        <li><a href="/categorise/{{'Men'}}/{{'T-shirt'}}">T-Shirts</a></li>
                                        <li><a href="/categorise/{{'Men'}}/{{'Male-Trouser'}}">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-1"><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Women's Clothes</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Blouses</a></li>
                                        <li><a href="mens.html">Skirts</a></li>
                                        <li><a href="mens.html">Frocks</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-2"><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid's(Male) Clothes</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">T-Shirts</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-0-3"><label for="item-0-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid's(Female) Clothes</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Blouses</a></li>
                                        <li><a href="mens.html">Frocks</a></li>
                                        <li><a href="mens.html">Skirts</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" id="item-1" checked="checked"><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Shoes and Slippers</label>
                            <ul>
                                <li><input type="checkbox" checked="checked" id="item-1-0"><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Male</label>
                                    <ul>
                                        <li><a href="mens.html">Slippers</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-1"><label for="item-1-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Women</label>
                                    <ul>
                                        <li><a href="mens.html">Slippers</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-2"><label for="item-1-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid's(Male)</label>
                                    <ul>
                                        <li><a href="mens.html">Slippers</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" checked="checked" id="item-1-3"><label for="item-1-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kid's(Female)</label>
                                    <ul>
                                        <li><a href="mens.html">Slippers</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-2"><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Soap</label>
                            <ul>
                                <li><input type="checkbox" id="item-2-0"><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Baby Soap</label>
                                    <ul>
                                        <li><a href="mens.html">Other</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-1"><label for="item-2-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Cleaning Soap</label>
                                    <ul>
                                        <li><a href="mens.html">Bar</a></li>
                                        <li><a href="mens.html">Powder</a></li>
                                        <li><a href="mens.html">Other</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-2"><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Kitchen</label>
                                    <ul>
                                        <li><a href="mens.html">Bar</a></li>
                                        <li><a href="mens.html">Powder</a></li>
                                        <li><a href="mens.html">Other</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-3"><label for="item-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Spices</label>
                            <ul>
                                <li><a href="mens.html">Turmeric</a></li>
                                <li><a href="mens.html">Clove</a></li>
                                <li><a href="mens.html">Cinnamon</a></li>
                                <li><a href="mens.html">Pepper</a></li>
                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-4"><label for="item-4"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Masks</label>
                            <ul>
                                <li><input type="checkbox" id="item-4-0"><label for="item-4-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Wood</label>
                                    <ul>
                                        <li><a href="mens.html">Traditional</a></li>
                                        <li><a href="mens.html">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-1"><label for="item-4-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Paper</label>
                                    <ul>
                                        <li><a href="mens.html">Traditional</a></li>
                                        <li><a href="mens.html">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-2"><label for="item-4-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Plastic</label>
                                    <ul>
                                        <li><a href="mens.html">Traditional</a></li>
                                        <li><a href="mens.html">Other</a></li> 
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-4-3"><label for="item-4-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ploythene</label>
                                    <ul>
                                        <li><a href="mens.html">Traditional</a></li>
                                        <li><a href="mens.html">Other</a></li> 
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- <div class="community-poll">
                    <h4>Community Poll</h4>
                    <div class="swit form">	
                        <form>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>	
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>	
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>		
                        <input type="submit" value="SEND">
                        </form>
                    </div>
                </div> -->
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span>Compare(0)</span></h5>
                <div class="sort-grid">
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
                </div>
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
                        <!-- <ul class="callbacks_tabs callbacks1_tabs">
                            <li class="callbacks1_s1 callbacks_here"><a href="#" class="callbacks1_s1">1</a></li>
                            <li class="callbacks1_s2"><a href="#" class="callbacks1_s2">2</a></li>
                            <li class="callbacks1_s3"><a href="#" class="callbacks1_s3">3</a></li>
                        </ul> -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="images/bb2.jpg" alt=" ">
                    </div>
                    <!-- <div class="col-sm-8 men-wear-right">
                        <h4>Exclusive Men's <span>Collections</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit. </p>
                    </div> -->
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
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">{{$addPosts[$x]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">Rs.{{$addPosts[$x]['price']-$addPosts[$x]['discount']}}</span>
                                        @if($addPosts[$x]['discount']!=null)
                                        <del>Rs.{{$addPosts[$x]['price']}}</del>
                                        @endif
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="business" value=" ">
                                                <input type="hidden" name="item_name" value="Party Men's Blazer">
                                                <input type="hidden" name="amount" value="30.99">
                                                <input type="hidden" name="discount_amount" value="1.00">
                                                <input type="hidden" name="currency_code" value="USD">
                                                <input type="hidden" name="return" value=" ">
                                                <input type="hidden" name="cancel_return" value=" ">
                                                <input type="submit" name="submit" value="Add to cart" class="button">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                    <!-- <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="/dist/img/spicesProduct.jpg" alt="" class="pro-image-front">
                                <img src="/dist/img/spicesProduct.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Analog Watch</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$160.99</span>
                                    <del>$290.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="Analog Watch">
                                            <input type="hidden" name="amount" value="30.99">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="images/s1.jpg" alt="" class="pro-image-front">
                                <img src="images/s1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                    
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Running Shoes</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$80.99</span>
                                    <del>$89.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="Running Shoes">
                                            <input type="hidden" name="amount" value="30.99">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="images/s1.jpg" alt="" class="pro-image-front">
                                <img src="images/s1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                    
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Running Shoes</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$80.99</span>
                                    <del>$89.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="Running Shoes">
                                            <input type="hidden" name="amount" value="30.99">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m1.jpg" alt="" class="pro-image-front">
                            <img src="images/m1.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <div class="single-pro row">
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m1.jpg" alt="" class="pro-image-front">
                            <img src="images/m1.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m2.jpg" alt="" class="pro-image-front">
                            <img src="images/m2.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Gabi Full Sleeve Sweatshirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Sweatshirt">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m3.jpg" alt="" class="pro-image-front">
                            <img src="images/m3.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Dark Blue Track Pants</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$80.99</span>
                                <del>$89.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Dark Blue Track Pants">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m4.jpg" alt="" class="pro-image-front">
                            <img src="images/m4.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Round Neck Black T-Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$190.99</span>
                                <del>$159.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="business" value=" ">
                                                        <input type="hidden" name="item_name" value="Black T-Shirt">
                                                        <input type="hidden" name="amount" value="30.99">
                                                        <input type="hidden" name="discount_amount" value="1.00">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <input type="hidden" name="return" value=" ">
                                                        <input type="hidden" name="cancel_return" value=" ">
                                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m5.jpg" alt="" class="pro-image-front">
                            <img src="images/m5.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Men's Black Jeans</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$60.99</span>
                                <del>$90.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="business" value=" ">
                                                        <input type="hidden" name="item_name" value="Men's Black Jeans">
                                                        <input type="hidden" name="amount" value="30.99">
                                                        <input type="hidden" name="discount_amount" value="1.00">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <input type="hidden" name="return" value=" ">
                                                        <input type="hidden" name="cancel_return" value=" ">
                                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m7.jpg" alt="" class="pro-image-front">
                            <img src="images/m7.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Analog Watch</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$160.99</span>
                                <del>$290.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="business" value=" ">
                                                        <input type="hidden" name="item_name" value="Analog Watch">
                                                        <input type="hidden" name="amount" value="30.99">
                                                        <input type="hidden" name="discount_amount" value="1.00">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <input type="hidden" name="return" value=" ">
                                                        <input type="hidden" name="cancel_return" value=" ">
                                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                                                
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m6.jpg" alt="" class="pro-image-front">
                            <img src="images/m6.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Reversible Belt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$30.99</span>
                                <del>$50.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="business" value=" ">
                                                        <input type="hidden" name="item_name" value="Reversible Belt">
                                                        <input type="hidden" name="amount" value="30.99">
                                                        <input type="hidden" name="discount_amount" value="1.00">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <input type="hidden" name="return" value=" ">
                                                        <input type="hidden" name="cancel_return" value=" ">
                                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                                                
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m8.jpg" alt="" class="pro-image-front">
                            <img src="images/m8.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                                
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Party Men's Blazer</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$260.99</span>
                                <del>$390.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="business" value=" ">
                                                        <input type="hidden" name="item_name" value="Party Men's Blazer">
                                                        <input type="hidden" name="amount" value="30.99">
                                                        <input type="hidden" name="discount_amount" value="1.00">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <input type="hidden" name="return" value=" ">
                                                        <input type="hidden" name="cancel_return" value=" ">
                                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                                                
                        </div>
                    </div>
                </div> -->
            </div>
	</div>
</div>
<div class="coupons">
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
                        {{$addPosts}}
					</div>
				</div>
			</div>

		</div>
</div>
@endsection