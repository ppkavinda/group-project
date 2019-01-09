
@extends('study.master')
@section('content')
    <div class="container-fluid tute-container">
    	<h3 class="w3l_header w3_agileits_header tute-title">Learn about <span>Courses</span></h3>
		<div class="row">
			<div class="tute-main-vid">
				<iframe width="720" height="422" src="https://www.youtube.com/embed/eCnrkH2m_ws" 
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>

		<h4>Comments</h4>

		@include('study.tute.comment')

		@include('study.tute.comment')

	</div>	
@endsection
