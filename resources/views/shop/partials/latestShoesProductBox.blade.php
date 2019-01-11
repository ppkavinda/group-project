@for($x=0; $x<count($latestShoes); $x++)
	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem" style="height:380px;" >
			<div class="men-thumb-item">
				<img src="/storage/{{$latestShoes[$x]['img1']}}" alt="" class="pro-image-front img-fluid" >
				<img src="/storage/{{$latestShoes[$x]['img1']}}" alt="" class="pro-image-back img-fluid" >
					<div class="men-cart-pro">
						<div class="inner-men-cart-pro">
							<a href="/quickView/{{$latestShoes[$x]['id']}}" class="link-product-add-cart">Quick View</a>
						</div>
					</div>
					@if(date_diff(date_create(date('Y-m-d')),$latestShoes[$x]['created_at'])->format("%a")< 7)
						<span class="product-new-top">New</span>
					@endif
					
			</div>
			<div class="item-info-product ">
				<h4><a href="/quickView/{{$latestShoes[$x]['id']}}">{{$latestShoes[$x]['name']}}</a></h4>
				<div class="info-product-price">
					<span class="item_price">LKR.{{$latestShoes[$x]['price']-$latestShoes[$x]['discount']}}</span>
					@if($latestShoes[$x]['discount']!=null)
					<del>{{$latestShoes[$x]['price']}}</del>
					@endif
				</div>					
			</div>
		</div>
	</div>
@endfor