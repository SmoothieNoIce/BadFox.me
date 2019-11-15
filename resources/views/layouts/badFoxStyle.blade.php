<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@if(empty($title))
		<title>Flexolk &mdash;</title>
	@else
    	<title>{{$title}}</title>
	@endif
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ URL::asset('js/style/modernizr-2.6.2.min.js') }} "></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- jQuery -->
		<script src="{{ URL::asset('js/style/jquery.min.js') }} "></script>
		<!-- jQuery Easing -->
		<script src="{{ URL::asset('js/style/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ URL::asset('js/style/bootstrap.js') }}"></script>
		<script src="{{ URL::asset('js/style/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ URL::asset('js/style/jquery.waypoints.min.js') }}"></script>
		<!-- Flexslider -->
		<script src="{{ URL::asset('js/style/jquery.flexslider-min.js') }}"></script>	
	
		<!-- MAIN JS -->
		<script src="{{ URL::asset('js/style/main.js') }}"></script>
		
		<script src="{{ URL::asset('js/style/modernizr-2.6.2.min.js') }}"></script>

		<script src="{{ URL::asset('js/style/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ URL::asset('js/style/masonry.pkgd.min.js') }}"></script>
	

</head>

<body>

	<div id="app">
	<div id="fh5co-page">

		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight " border: none>
			<a href="{{ url('index') }}" class="blog-img"><img src="{{URL::asset('images/badfox.png')}}" class="logo-img img-responsive" alt="IMAGE"></a>
			<h1 id="fh5co-logo"><a href="{{ url('index') }}">Flexolk</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					@switch($category)
						@case(0)
							<li class="fh5co-active"><a href="{{ url('index') }}">首頁</a></li>
							<li><a href="{{ url('articleList') }}">文章</a></li>
							<li><a href="{{ url('search') }}">搜尋</a></li>
							<li><a href="{{ url('about') }}">關於本站</a></li>
							@break
						@case(1)
							<li ><a href="{{ url('index') }}">首頁</a></li>
							<li class="fh5co-active"><a href="{{ url('articleList') }}">文章</a></li>
							<li><a href="{{ url('search') }}">搜尋</a></li>
							<li><a href="{{ url('about') }}">關於本站</a></li>
							@break
						@case(2)
							<li><a href="{{ url('index') }}">首頁</a></li>
							<li><a href="{{ url('articleList') }}">文章</a></li>
							<li class="fh5co-active"><a href="{{ url('search') }}">搜尋</a></li>
							<li><a href="{{ url('about') }}">關於本站</a></li>
							@break
						@case(3)
							<li><a href="{{ url('index') }}">首頁</a></li>
							<li><a href="{{ url('articleList') }}">文章</a></li>
							<li><a href="{{ url('search') }}">搜尋</a></li>
							<li class="fh5co-active"><a href="{{ url('about') }}">關於本站</a></li>
							@break
						@case(4)
							<li><a href="{{ url('index') }}">首頁</a></li>
							<li><a href="{{ url('articleList') }}">文章</a></li>
							<li><a href="{{ url('search') }}">搜尋</a></li>
							<li ><a href="{{ url('about') }}">關於本站</a></li>
							<li class="fh5co-active"><a href="{{ url('admin/login') }}">後台</a></li>
							@break
						@default
							<li class="fh5co-active"><a href="{{ url('index') }}">首頁</a></li>
							<li><a href="{{ url('articleList') }}">文章</a></li>
							<li><a href="{{ url('search') }}">搜尋</a></li>
							<li><a href="{{ url('about') }}">關於本站</a></li>
					@endswitch
				</ul>
			</nav>
		

			<div class="fh5co-footer">
					<div >
							<form action="{{ url('search') }}" method="get">
								{{ csrf_field() }}
								<div class="active-purple-4 mb-4 search-div">
									<input class="form-control py-2 search-form" name="parameter" type="text" placeholder="搜尋" aria-label="Search">
								</div>
							</form>
					</div>
				<p>{{-- <small>&copy; Badfox.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">BadFox</a> </span> </small> --}}</p>
				<ul>
					{{-- <li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li> --}}
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">
			@yield('content')
		</div>

	</div>
	</div>

</body>



	
</html>

