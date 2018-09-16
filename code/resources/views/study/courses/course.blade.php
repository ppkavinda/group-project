@extends('study.master')
@section('content')

{{-- @include('study.partials.banner') --}}

<div class="container contact">
	<h3 class="w3l_header w3_agileits_header">Learn <span>{{ $course->title }}</span></h3>
		<div class="wthree_services_grids row">	
			<div class="col-md-6 wthree_services_grid_left">
						
				<h3>MAKING <span>{{ strtoupper($course->title) }}</span></h3>
				<h4>{{ $course->subtitle }}</h4>

				@if (! \App\User::find(1)->courses()->find($course->id))
				<a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
				@endif
				
				<p>{{ $course->description }}</p>
				
			</div>
			<div class="col-md-6 wthree_services_grid_right">
				<div class="row">
					<div class="col-md-10">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 agileits_w3layouts_service_grid">
						{{-- <div class="agile_service_grd" style="color: white;"> --}}
							<img src="/dist/img/{{ $course->cover_img }}" class="img-fluid" alt="{{ $course->title }}">
						{{-- </div> --}}
					</div>
				</div>
			</div>
			<div class="container">
				<div class="wthree_services_grids mb-2">
					<div class="wthree_services_grid_left">
						<h3>SEE POSTS ABOUT <span>{{ strtoupper($course->title) }}</span></h3>
					</div>
				</div>
			</div>
			@if (\App\User::find(1)->courses()->find($course->id))
				<div class="container">
					<div class="wthree_services_grids mb-2">
						@foreach ($course->posts as $post)
							@include('study.courses.postCard')
						@endforeach
					</div>
				</div>
			@else
				<div class="container">
					<div class="wthree_services_grids mb-2">
						<div class="wthree_services_grid_left">
							To see the posts about {{ $course->title }}: <a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection