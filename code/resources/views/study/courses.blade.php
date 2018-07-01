@extends('study.master')

@section('content')

@include('study.partials.banner')

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">Our <span>Courses</span></h3>
			<div class="inner_w3l_agile_grids-gal row">
				@include('study.courseBox')
				<div class="col-md-4 gallery-grid gallery1">
					<a href="/dist/img/2.jpg" class="swipebox"><img src="/dist/img/2.jpg" class="img-fluid" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
						<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
			</div>
		</div>	
	</div>

@endsection