
@extends('admin.master')
@section('content')

		{{-- <aside class="control-sidebar control-sidebar-dark"> --}}
		{{-- </aside> --}}
		<!DOCTYPE html>
<html>
<head>
<title>Athwela Shopping center</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/study.css">
<link rel="stylesheet" href="/css/app.css">
@stack('styles')
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
	<div>
	@include('admin.partial.nav')
	</div>
	<div id="app">
		@yield('content')
	</div>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
@stack('scripts')
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	$.ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
						
	$().UItoTop({ easingType: 'easeOutQuart' });
								
</script>
<br><br><br><br>
	@include('admin.partial.sidebar')	
	@include('admin.partial.content')

</body>
</html>
	</div>
@endsection