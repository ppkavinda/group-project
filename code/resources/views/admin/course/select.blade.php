@extends('admin.master')
@section('content')
<div class="content-wrapper">

  <div class="container">
				@foreach ($courses as $course)
				{{-- {{ dd ($course->title)}} --}}
                <div class="col-md-4 gallery-grid gallery1">
	            <a href="{{ $course->path() }}" class="swipebox"><img src="/dist/img/{{ $course->cover_img }}" class="img-fluid" alt="/">
		        <div class="textbox">
			    <h4>{{ $course->title }}</h4>
			    <p></p>
			    <p></p>
		        </div>
	            </a>
				@endforeach

		</div>	
	</div>


</div>
@endsection