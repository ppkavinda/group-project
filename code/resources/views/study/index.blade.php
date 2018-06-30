@extends('study.master')
@section('content')
<!-- header -->
	@include('study.partials.nav')
<!-- //banner-top -->


<!-- banner -->
	@include('study.partials.carousel')
	<!-- //banner -->
<!--grids-->
	<div class="banner-bottom">
		<div class="container">
			<h3>Join <span class="fixed_w3"> Mastering</span> today to start discovering thousand of content with minimum <span class="fixed_w3"> effort and cost! </span></h3>
			<div class="agileits_banner_bottom_grids">
				<div class="row">
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/1.jpg" alt=" " class="img-fluid" />
							<div class="overlay">
							   <h4>Mastering</h4>
							   <p>Education</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/2.jpg" alt=" " class="img-fluid" />
							<div class="overlay">
							   <h4>Mastering</h4>
							     <p>Education</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/3.jpg" alt=" " class="img-fluid" />
							<div class="overlay">
							   <h4>Mastering</h4>
							    <p>Education</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/4.jpg" alt=" " class="img-fluid" />
							<div class="overlay">
							   <h4>Mastering</h4>
							    <p>Education</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="team-w3ls-row">
				   <h3 class="w3l_header w3_agileits_header">Our <span>Insrtuctors</span></h3>
				   <div class="agileits_banner_bottom_grids row">
					<div class="col-md-3 col-sm-6 team-grids">
						<img src="/dist/img/t1.jpg" alt=""/>
						<div class="img-caption w3-agileits">
							<div class="img-agileinfo-text">
								<h4>Alan Ipsum</h4>
								<p>English Instructor</p> 
								<div class="w3social-icons"> 
									<ul>
										<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
										<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 team-grids">
						<img src="/dist/img/t2.jpg" alt=""/>
						<div class="img-caption">
							<div class="img-agileinfo-text">
								<h4>Lana del Rey</h4>
								<p>PHP Instructor </p>
								<div class="w3social-icons"> 
									<ul>
										<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
										<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 team-grids">
						<img src="/dist/img/t3.jpg" alt=""/>
						<div class="img-caption">
							<div class="img-agileinfo-text">
								<h4>Mark John</h4>
								<p>English Instructor</p> 
								<div class="w3social-icons"> 
									<ul>
										<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
										<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 team-grids">
						<img src="/dist/img/t4.jpg" alt=""/>
						<div class="img-caption">
							<div class="img-agileinfo-text">
								<h4>Peter Parker</h4>
								<p>PHP Instructor</p>
								<div class="w3social-icons"> 
									<ul>
										<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
										<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
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
					<h5>Experienced Faculty</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
				
					<figure class="icon">
					 <span>2</span>
					<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h5>Online Courses</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>3</span>
						<i class="fa fa-book" aria-hidden="true"></i>
					</figure>
					<h5>Central Library</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>4</span>
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					</figure>
					<h5>Creative Thinking</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog" id="blog">
		<div class="container">
		
		<h3 class="w3l_header w3_agileits_header"> Latest <span>  News</span></h3>
			<div class="agile_inner_w3ls-grids row">
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img1">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 05</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 874</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Jan 28th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img2">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 21</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 287</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Feb 24th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //blog -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids row">
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				   <i class="fa fa-laptop" aria-hidden="true"></i>
					<p class="counter">45</p>
					<h3>Courses</h3>
				</div>
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				    <i class="fa fa-smile-o" aria-hidden="true"></i>
					<p class="counter">165</p>
					<h3>Members</h3>
				</div>
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<i class="fa fa-trophy" aria-hidden="true"></i>
					<p class="counter">563</p>
					<h3>Awards</h3>
				</div>
				<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<i class="fa fa-user" aria-hidden="true"></i>
					<p class="counter">245</p>
					<h3>Instructors</h3>
				</div>
			</div>
   		</div>	
	</div>
<!-- //stats -->

<!-- testimonials -->		
	<div class="testimonials">
		<div class="container">
			<h3>what people says</h3>
			<ul class="slides row">
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
								<img src="/dist/img/test1.jpg" alt=" " class="img-fluid" />
							</div>
							<div class="col-xs-8 w3_agile_event_right_grid_right">
								<h4>Williams Stall</h4>
								<p>Graphic & web designer</p>
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
									<img src="/dist/img/test2.jpg" alt=" " class="img-fluid" />
							</div>
							<div class="col-xs-8 w3_agile_event_right_grid_right">
								<h4>Catherine Mark</h4>
								<p>PHP & web developer</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
<!-- footer -->
	@include('shop.partials.footer')
<!-- //footer -->

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