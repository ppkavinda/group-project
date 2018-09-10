@extends('study.master')
@section('content')

{{-- @include('study.partials.banner') --}}

<div class="container">
	<h3 class="w3l_header w3_agileits_header">Learn <span>{{ $course->title }}</span></h3>
		<div class="wthree_services_grids row">	
			<div class="col-md-6 wthree_services_grid_left">
						
				<h3>MAKING <span>{{ strtoupper($course->title) }}</span></h3>
				<h4>{{ $course->subtitle }}</h4>

				@if (! \App\User::find(1)->courses()->find($course->id))
				<a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
				@endif
				
				<p>{{ $course->description }}</p>
				
				@if (! \App\User::find(1)->courses()->find($course->id))
					To see the full course: <a class="hvr-outline-out enroll-btn" href="/enroll/{{ $course->id }}">ENROLL now </a>
				@endif

				<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
				
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