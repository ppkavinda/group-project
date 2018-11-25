<!DOCTYPE html>
<html>
<head>
<title>Athwela Shopping center</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); --}}
		{{-- function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
<!--//tags -->
<!-- Font Awesome -->
{{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
<link rel="stylesheet" href="/css/font-awesome.css">
<!-- Google Font: Source Sans Pro -->
{{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
<!-- Ionicons -->
{{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
<link rel="stylesheet" href="/css/flexslider.css">
<link rel="stylesheet" href="/css/shop.css">
<!-- //for bootstrap working -->
{{-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"> --}}
{{-- <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'> --}}
</head>
<body>
	<div id="app">
		@include('study.partials.nav')
		@yield('content')
		@include('shop.partials.footer')
	</div>
	<!-- //footer -->

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<script src="/js/jquery.flexslider.js"></script>

<!-- js -->
{{-- <script src="js/modernizr.custom.js"></script> --}}
	<!-- Custom-JavaScript-File-Links --> 
<script>
	// Mini Cart
	// paypal.minicart.render({
	// 	action: '#'
	// });

	// if (~window.location.search.indexOf('reset=true')) {
	// 	paypal.minicart.reset();
	// }
</script>

	<!-- //cart-js --> 
<script>
$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
	$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
	});
});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	{{-- <script src="js/jquery.waypoints.min.js"></script> --}}
	{{-- <script src="js/jquery.countup.js"></script> --}}
	<script>
		$('.counter').countUp();
// var demo = new CountUp('myTargetElement', 0, 4587, 0, 2.5, options);
// if (!demo.error) {
//   demo.start();
// } else {
//   console.error(demo.error);
// }
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


</body>
</html>
