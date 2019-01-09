@extends('shop.master')
@section('content')
<!-- header name -->
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
<!-- header name -->

			<!-- header bottom view -->
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

        </div>
</div>
<!-- header bottom view -->

<!-- categories -->

<div class="banner-bootom-w3-agileits">
	<div class="container">
        <div class="row">
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
    <!-- categories -->

            <!-- price range -->
            <div class="col-md-8 products-right">
                <h5>Product <span>Price Range</span></h5>
                <hr>
                <form action="/categories/priceRange" method="post" class="form-inline" onsubmit="return checkForm(this);">
                    <div class="row">
                        @csrf
                        <div class="form-group mb-1 col-md-3">
                            <div class="row">
                                <b class="col-md-5 align-text-center col-form-label-md">&nbspFrom(LKR)&nbsp</b>
                                {{-- <label for="staticEmail2" class="sr-only col-md-1">From(LKR)</label> --}}
                                <input type="number" class="form-control mb-2 mr-sm-2 col-md-4" id="selectFrom" name="fromValue" min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="row">
                                <b class="col-md-4">&nbspTo(LKR)&nbsp</b>
                                {{-- <label for="inputPassword2" class="sr-only col-md-1 mt-3">To(LKR)</label> --}}
                                <input type="number" class="form-control mb-2 mr-sm-2 col-md-4" id="selectTo" name="toValue" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <b for="type" id="labels" class="col-md-4 align-text-middle">Category</b>
                                <select class="form-control mb-2 mr-sm-2 col-md-6" id="selectCategory" name="category">
                                    <option>All</option>
                                    <option {{ $category_id == 1 ? 'selected' : '' }}>Clothes</option>
                                    <option {{ $category_id == 2 ? 'selected' : '' }}>Masks</option>
                                    <option {{ $category_id == 3 ? 'selected' : '' }}>Soap</option>
                                    <option {{ $category_id == 4 ? 'selected' : '' }}>Spices</option>
                                    <option {{ $category_id == 5 ? 'selected' : '' }}>Shoes / Slippers</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">View</button>
                   </div>
                </form>
            <!-- price range -->

                <hr>
                <!-- view products -->
                <div class="row">
                    @for($x=0; $x<count($addPosts); $x++)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem" style="height:380px;">
                                <div class="men-thumb-item">
                                    <img src="/storage/{{ $addPosts[$x]['img1'] }}" alt="" class="pro-image-front img-fluid" >
                                    <img src="/storage/{{ $addPosts[$x]['img1'] }}" alt="" class="pro-image-back img-fluid" >
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
                                    <h4><a href="/quickView/{{$addPosts[$x]['id']}}">{{$addPosts[$x]['name']}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">LKR {{round(($addPosts[$x]['price']*($addPosts[$x]['discount']-100)/100),2)}}</span>
                                        @if($addPosts[$x]['discount']!=null)
                                        <del>LKR {{$addPosts[$x]['price']}}</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                <!-- view products -->

                    
                </div>
                <!-- paginate link -->
                <div class="pull-right">{{ $addPosts->links() }}</div>
                <!-- paginate link -->
            </div>
	</div>
</div>
<br>
</div>

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