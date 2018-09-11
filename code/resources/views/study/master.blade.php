<!DOCTYPE html>
<html>
<head>
<title>Athwela Shopping center</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/study.css">

</head>
<body>

	@include('study.partials.nav')

	<div id="app">
		@yield('content')
	</div>

	@include('shop.partials.footer')

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>

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

</body>
</html>
