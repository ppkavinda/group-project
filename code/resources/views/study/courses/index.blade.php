@extends('study.master')

@section('content')

{{-- @include('study.partials.banner') --}}

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">Our <span>Courses</span></h3>
			<div class="inner_w3l_agile_grids-gal row">

				@foreach ($courses as $course)
				{{-- {{ dd ($course->title)}} --}}
					@include('study.courses.courseBox')
				@endforeach

			</div>
		</div>	
	</div>

@endsection