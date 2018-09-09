@extends('study.master')
@section('content')

@include('study.partials.banner')

<div class="container">
	<h3 class="w3l_header w3_agileits_header">Learn <span>{{ $course->title }}</span></h3>
		<div class="wthree_services_grids row">	
			<div class="col-md-6 wthree_services_grid_left">
						
				<h3>MAKING <span>{{ strtoupper($course->title) }}</span></h3>
				<h4>{{ $course->subtitle }}</h4>
				<a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
				<p>{{ $course->description }}</p>
				To see the full course: <a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>

			</div>
			<div class="col-md-6 wthree_services_grid_right">
				<div class="row">
					<div class="col-md-10">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd" style="color: white;">
							PHOTO
						</div>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd" style="color: white;">
							PHOTO
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection