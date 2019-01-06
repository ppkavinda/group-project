@for($x=0; $x<count($latestClothes); $x++)
	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="/storage/{{$latestClothes[$x]['img1']}}" alt="" class="pro-image-front img-fluid" style="width:200px; height:200px;">
				<img src="/storage/{{$latestClothes[$x]['img1']}}" alt="" class="pro-image-back img-fluid" style="width:200px; height:200px;">
					<div class="men-cart-pro">
						<div class="inner-men-cart-pro">
							<a href="/quickView/{{$latestClothes[$x]['id']}}" class="link-product-add-cart">Quick View</a>
						</div>
					</div>
					@if(date_diff(date_create(date('Y-m-d')),$latestClothes[$x]['created_at'])->format("%a")< 7)
						<span class="product-new-top">New</span>
					@endif
					
			</div>
			<div class="item-info-product ">
				<h4><a href="/quickView/{{$latestClothes[$x]['id']}}">{{$latestClothes[$x]['name']}}</a></h4>
				<div class="info-product-price">
					<span class="item_price">LKR.{{$latestClothes[$x]['price']-$latestClothes[$x]['discount']}}</span>
					@if($latestClothes[$x]['discount']!=null)
					<del>{{$latestClothes[$x]['price']}}</del>
					@endif
				</div>					
			</div>
		</div>
	</div>
@endfor