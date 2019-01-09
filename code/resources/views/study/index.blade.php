@extends('study.master')
@section('content')



<!-- banner -->
	@include('study.partials.carousel')
	<!-- //banner -->
	<div class="banner-bottom">
		<div class="container">
			<h3>Join with us, To be a <span class="fixed_w3">Successful Entrepreneur.</span> Start your journey <span class="fixed_w3"> Today! </span></h3>
			<br /><br />
			<!-- courses links -->
			<h3><span class="fixed_w3">Top </span>Online Course Categories</h3>

			<div class="agileits_banner_bottom_grids">
				<div class="row">
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/courses">
							<div class="hovereffect w3ls_banner_bottom_grid">
									<img src="/dist/img/slipper.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;"/>
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
								<img src="/dist/img/clothCourse.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;"/>
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
								<img src="/dist/img/course3.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;" />
								<div class="overlay">
								<h4>Spices</h4>
									<p>Course</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 agileits_banner_bottom_grid">
						<div class="hovereffect w3ls_banner_bottom_grid">
							<img src="/dist/img/cookCourse.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;" />
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
<!-- courses links -->

<!--shop links -->
<div class="banner-bottom">
	<div class="p-3 mb-2 bg-secondary text-white">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our <span>Top Product</span></h3>
			<div class="agileits_banner_bottom_grids">
			<div class="p-3 mb-2 bg-dark text-white">
				<div class="row">
					<div class="col-md-3 agileits_banner_bottom_grid">
						<a href="/categories/{{'5'}}">
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
						<a href="/categories/{{'1'}}">
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
						<a href="/categories/{{'4'}}">
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
						<a href="/categories/{{'2'}}">
							<div class="hovereffect w3ls_banner_bottom_grid">
								<img src="/dist/img/maskProduct.jpg" alt=" " class="img-fluid" style="width:250px; height:250px;">
								<div class="overlay">
								<h4>Masks</h4>
									<p>Products</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<br>
		</div>
		</div>
		</div>
	</div>
	<!-- shop links -->

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
	<!-- services -->
<!-- count of users,courses and facilitators -->
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
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
			<i class="fa fa-user" aria-hidden="true"></i>
				<p class="counter">{{$facilitatorCount}}</p>
				<h3>Facilitators</h3>
			</div>
		</div>
	</div>	
</div>
<!-- count of users,courses and facilitators -->


@endsection