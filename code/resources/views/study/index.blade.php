@extends('study.master')
@section('content')



<!-- banner -->
	@include('study.partials.carousel')
	<!-- //banner -->
<!--grids-->
	<div class="banner-bottom">
		<div class="container">
			<h3>Join with us, To be a <span class="fixed_w3">Successful Entrepreneur.</span> Start your journey <span class="fixed_w3"> Today! </span></h3>
			<br /><br />
			<h4>Top Online Course Categories</h4>

			<div class="agileits_banner_bottom_grids">
				<div class="row">
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
									<img src="/dist/img/slipper.jpg" alt=" " class="img-fluid" />
								<div class="overlay">
								<h4>Shoes and Slippers</h4>
								<p>Course</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
								<img src="/dist/img/course3.jpg" alt=" " class="img-fluid" />
								<div class="overlay">
								<h4>Clothes</h4>
									<p>Course</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
								<img src="/dist/img/course3.jpg" alt=" " class="img-fluid" />
								<div class="overlay">
								<h4>Spices</h4>
									<p>Course</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/4.jpg" alt=" " class="img-fluid" />
							<div class="overlay">
							   <h4>Cooking</h4>
							    <p>Course</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
<!--shop links -->
	<div class="banner-bottom">
	<div class="p-3 mb-2 bg-secondary text-white">
		<div class="container">
		<h3>Our<span class="fixed_w3"> Top Product </span>Categories</h3>
			<div class="agileits_banner_bottom_grids">
			<div class="p-3 mb-2 bg-dark text-white">
				<div class="row">
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
									<img src="/dist/img/shoesProduct.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;" >
								<div class="overlay">
								<h4>Shoes and Slippers</h4>
								<p>Product</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
								<img src="/dist/img/clothesProduct.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;">
								<div class="overlay">
								<h4>Clothes</h4>
									<p>Product</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
								<img src="/dist/img/spicesProduct.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;">
								<div class="overlay">
								<h4>Spices</h4>
									<p>Product</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/maskProduct.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;">
							<div class="overlay">
							<h4>Masks</h4>
								<p>Products</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
		</div>
		</div>
	</div>
<!-- //banner-bottom -->

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our <span>Benefits</span></h3>
			<div class="agile_inner_w3ls-grids two row">
				<div class="col-md-3 service-box">
					<figure class="icon">
					    <span>1</span>
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</figure>
					<h5>Experienced Facilitators</h5>
					<p>Our Lectures are experienced and have good skills.</p>
				</div>
				<div class="col-md-3 service-box">
				
					<figure class="icon">
					 <span>2</span>
					<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h5>Online Courses</h5>
					<p>Any registered user can follow our online courses free.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>3</span>
						<i class="fa fa-book" aria-hidden="true"></i>
					</figure>
					<h5>Knowlegede Sharing</h5>
					<p>We share our entrepreneurs knowlegede and experiences.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>4</span>
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					</figure>
					<h5>Creative Thinking</h5>
					<p>Our entrepreneurs and facilitators have creative thinking</p>
				</div>
			</div>
		</div>
	</div>
<!-- testimonials -->		
<!-- <div class="testimonials">
		<div class="container">
			<h3>Our Most Experienced Facilitator</h3>
			<ul class="slides row">
				<li class="col-md-6">
					<div class="w3_event_right_grid">
						<div class="w3layouts_event_right_para">
							<p>How to make proper clothes for market. You can earn money easly. Quality of your
							product is import bulid your own market.</p>
							<div class="w3layouts_event_right_para_pos">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</div>
						</div>
						<div class="w3_agile_event_right_grids">
							<div class="col-xs-4 w3_agile_event_right_grid_left">
								<img src="/dist/img/facilitator.jpg" alt=" " class="img-fluid" />
							</div>
							<div class="col-xs-8 w3_agile_event_right_grid_right">
								<h4>P.T.S.Perera</h4>
								<p>Traditional clothes designer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</li>
				<li class="col-md-6">
					<div class="w3_event_right_grid">
						<div class="w3layouts_event_right_para">
							<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
								Mauris hendrerit, mi in aliquet egestas, nisi mi vestibulum turpis.</p>
							<div class="w3layouts_event_right_para_pos">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</div>
						</div>
						<div class="w3_agile_event_right_grids">
							<div class="col-xs-4 w3_agile_event_right_grid_left">
									<img src="/dist/img/facilitator.jpg" alt=" " class="img-fluid" />
							</div>
							<div class="col-xs-8 w3_agile_event_right_grid_right">
								<h4>R.T.S.Gunawardhane</h4>
								<p>Slippers and Shoes designer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div> -->
	<!-- //blog -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids row">
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				   <i class="fa fa-laptop" aria-hidden="true"></i>
					<p class="counter">{{$courseCount}}</p>
					<h3>Courses</h3>
				</div>
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				    <i class="fa fa-smile-o" aria-hidden="true"></i>
					<p class="counter">{{$users}}</p>
					<h3>Members</h3>
				</div>
				<!--<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<i class="fa fa-trophy" aria-hidden="true"></i>
					<p class="counter">563</p>
					<h3>Awards</h3>
				</div>-->
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<i class="fa fa-user" aria-hidden="true"></i>
					<p class="counter">{{$facilitatorCount}}</p>
					<h3>Facilitators</h3>
				</div>
			</div>
   		</div>	
	</div>
<!-- //stats -->
<!-- login -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
				</div>
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-bottom">
								<h3>Sign up for free</h3>
								<form>
									<div class="sign-up">
										<h4>Email :</h4>
										<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
									</div>
									<div class="sign-up">
										<h4>Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
										
									</div>
									<div class="sign-up">
										<h4>Re-type Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
										
									</div>
									<div class="sign-up">
										<input type="submit" value="REGISTER NOW" >
									</div>
									
								</form>
							</div>
							<div class="login-right">
								<h3>Sign in with your account</h3>
								<form>
									<div class="sign-in">
										<h4>Email :</h4>
										<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
									</div>
									<div class="sign-in">
										<h4>Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
										<a href="#">Forgot password?</a>
									</div>
									<div class="single-bottom">
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span>Remember Me.</label>
									</div>
									<div class="sign-in">
										<input type="submit" value="SIGNIN" >
									</div>
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
						<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


@endsection