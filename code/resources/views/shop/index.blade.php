@extends('shop.master')
@section('content')
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
										<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									</a>
								</li>
								<li><a href="#" class="twitter"> 
										<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									</a>
									</li>
								<li><a href="#" class="instagram">
										<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									</a>
									</li>
								<li><a href="#" class="pinterest">
										<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									</a>
									</li>
							</ul>
							<div class="clearfix"></div>
							<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="/dist/img/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="/dist/img/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

<!-- banner -->
	@include('shop.partials.carousel')
	<!-- //banner -->
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
	<!-- schedule-bottom -->
	<!-- <div class="schedule-bottom">
		<div class="row">
			<div class="col-md-6 agileinfo_schedule_bottom_left">
				<img src="/dist/img/mid.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-6 agileits_schedule_bottom_right">
				<div class="w3ls_schedule_bottom_right_grid">
					<h3>Save up to <span>50%</span> in this week</h3>
					<p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
						Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
					<div class="row">
						<div class="col-md-4 w3l_schedule_bottom_right_grid1">
							<i class="fa fa-user-o" aria-hidden="true"></i>
							<h4>Customers</h4>
							<h5 class="counter">653</h5>
						</div>
						<div class="col-md-4 w3l_schedule_bottom_right_grid1">
							<i class="fa fa-calendar-o" aria-hidden="true"></i>
							<h4>Events</h4>
							<h5 class="counter">823</h5>
						</div>
						<div class="col-md-4 w3l_schedule_bottom_right_grid1">
							<i class="fa fa-shield" aria-hidden="true"></i>
							<h4>Awards</h4>
							<h5 class="counter">45</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	@include('shop.partials.trending')					
<!--/grids-->
<!-- /new_arrivals --> 
	@include('shop.partials.newarrivals')
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>Discount For <span>Most</span> Products</h6>
 
				<a class="hvr-outline-out button2" href="/categories">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<!--/grids-->
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