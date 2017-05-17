<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		@section('titulo')
		<title>Project K</title>
		@show
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Web Fonts -->
		<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="{{ asset("plugins/bootstrap/css/bootstrap.min.css") }}">
		<link rel="stylesheet" href="{{ asset("css/style.css") }}">
		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="{{ asset("css/headers/header-default.css") }}">
		<link rel="stylesheet" href="{{ asset("css/footers/footer-v1.css") }}">
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="{{ asset("plugins/animate.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/line-icons/line-icons.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/font-awesome/css/font-awesome.min.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/scrollbar/css/jquery.mCustomScrollbar.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/parallax-slider/css/parallax-slider.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/owl-carousel/owl-carousel/owl.carousel.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/sky-forms-pro/skyforms/css/sky-forms.css") }}">
		<link rel="stylesheet" href="{{ asset("plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css") }}">
		<!--[if lt IE 9]><link rel="stylesheet" href="{{ asset("plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css") }}"><![endif]-->
		<!-- CSS Page Style -->
		<link rel="stylesheet" href="{{ asset("css/pages/profile.css") }}">
		<!-- CSS Theme -->
		<link rel="stylesheet" href="{{ asset("css/theme-colors/default.css") }}" id="style_color">
		<link rel="stylesheet" href="{{ asset("css/theme-skins/dark.css") }}">
		<!-- CSS Customization -->
		<link rel="stylesheet" href="{{ asset("css/custom.css") }}">
		@section('estilos')
		@show
	</head>
	<body>
		<div class="wrapper">
			@include('layouts.slider')
			{{-- @include('layouts.header') --}}
			{{-- @include('layouts.purchase') --}}
			<div class="margin-bottom-30"></div>
			<div class="container">
				@section('contenido')
					@include('layouts.maps')
				@show
			</div>
			@include('layouts.footer')
		</div>
		<!-- JS Global Compulsory -->
		<script type="text/javascript" src="{{ asset("plugins/jquery/jquery.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/jquery/jquery-migrate.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/bootstrap/js/bootstrap.min.js") }}"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="{{ asset("plugins/back-to-top.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/smoothScroll.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/parallax-slider/js/modernizr.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/parallax-slider/js/jquery.cslider.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/owl-carousel/owl-carousel/owl.carousel.js") }}"></script>
		<script type="text/javascript" src="{{ asset("plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
		<!-- JS Customization -->
		<script type="text/javascript" src="{{ asset("js/custom.js") }}"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
		<script type="text/javascript" src="{{ asset("js/plugins/owl-carousel.js") }}"></script>
		<script type="text/javascript" src="{{ asset("js/plugins/style-switcher.js") }}"></script>
		<script type="text/javascript" src="{{ asset("js/plugins/parallax-slider.js") }}"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyALo2iAW7U4VIN3Qja94uDhkmyf6sCa2xk&sensor=true"></script>
		<script type="text/javascript" src="{{ asset("plugins/gmap/gmap.js") }}"></script>
		<script type="text/javascript" src="{{ asset("js/pages/page_contacts.js") }}"></script>
		<script type="text/javascript" src="{{ asset("js/custom-jquery.js") }}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initScrollBar();
				ContactPage.initMap();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();
				ParallaxSlider.initParallaxSlider();
			});
		</script>
		<!--[if lt IE 9]>
			<script src="plugins/respond.js"></script>
			<script src="plugins/html5shiv.js"></script>
			<script src="plugins/placeholder-IE-fixes.js"></script>
		<![endif]-->
	</body>
</html