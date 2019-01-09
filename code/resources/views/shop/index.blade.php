@extends('shop.master')
@section('content')
<!-- banner -->
	@include('shop.partials.carousel')
<!-- banner -->

<!-- latest two products -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls row">
				<div class="col-md-4 wthree_banner_bottom_grid_three_left1 grid">
					<a href="/quickView/{{$latest[0]['id']}}">
						<figure class="effect-roxy">
							<img src="/storage/{{$latest[0]['img1']}}" alt=" " class="img-fluid"  style="width:510px; height:400px;" />
							<figcaption>
								<h3>{{$latest[0]['name']}}</h3>
								<p><font color="red">New Arrivals</font></p>
							</figcaption>			
						</figure>
					</a>
				</div>
				<div class="col-md-3">
					<br><br><br>
					
					<center><h3 class="wthree_text_info">Newest<span> Arrivals</span></h3></center>		
				</div>
				<div class="col-md-4 wthree_banner_bottom_grid_three_left1 grid">
					<a href="/quickView/{{$latest[1]['id']}}">
						<figure class="effect-roxy">
							<img src="/storage/{{$latest[1]['img1']}}" alt=" " class="img-responsive" style="width:510px; height:400px;"/>
							<figcaption>
								<h3>{{$latest[1]['name']}}</h3>
								<p><font color="red">New Arrivals</font></p>
							</figcaption>			
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
<!-- latest two products -->

<!-- trending products -->
	@include('shop.partials.trending')	
<!-- trending products -->

<!-- /new_arrivals --> 
	@include('shop.partials.newarrivals')
	<!-- //new_arrivals --> 
		<div class="sale-w3ls">
			<div class="container">
				<h6>Discount For <span>Most</span> Products</h6>
 
				<a class="hvr-outline-out button2" href="/categories">Shop Now </a>
			</div>
		</div>
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="row">
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Address</h3>
							<p>no.35,</p>
							<p>Malabe.</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-bolt" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Fast Service</h3>
							<p>dilever as soon as possible</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-shopping-bag" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Good Service</h3>
							<p>Guarantee about product</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-gift" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Discount</h3>
							<p>discount avaiable for products</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

		</div>
</div>
<!--grids-->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


@endsection