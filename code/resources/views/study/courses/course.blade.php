@extends('study.master')
@section('content')

<div class="container contact">
	<h3 class="w3l_header w3_agileits_header"> {{ explode(' ', $course->title)[0] }} <span>{{ substr($course->title, strpos($course->title, ' ')) }}</span></h3>
		<div class="wthree_services_grids row">	
			<div class="col-md-6 wthree_services_grid_left">
						
				<h3>LEARN ABOUT <span>{{ strtoupper($course->title) }}</span></h3>
				<h4>{{ $course->subtitle }}</h4>

				@if (! auth()->user() )
						<a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
				@else
					@if (! auth()->user()->courses->find($course->id))
						<a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
					@endif
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
						<img src="/dist/img/{{ $course->cover_img }}" class="img-fluid" alt="{{ $course->title }}">
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
			@if (! auth()->check())
				<div class="container">
					<div class="wthree_services_grids mb-2">
						<div class="wthree_services_grid_left">
							To see the posts about {{ $course->title }}: <a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
						</div>
					</div>
				</div>
			@else
				@if ( auth()->user()->courses->find($course->id))
				<div class="container">
					<div class="wthree_services_grids mb-2">
						@foreach ($course->posts as $post)
							@if ($post->published)
								@include('study.courses.postCard')
							@endif
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
			@endif
		</div>
	</div>
@endsection