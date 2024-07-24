<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>A propos</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
	<!--build:css css/Archios-assets.min.css-->

    <!--build:css css/Archios-assets.min.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation.css')}}">
    <!--endbuild-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>
<body class="light-version">

<div id="ip-container" class="ip-container">
	<!-- initial loader -->
	<div class="ip-header">

		<p class="ip-logo">
			<img src="{{asset('images/logo-white.png')}}" alt="">
		</p>

		<div class="ip-loader">
			<svg class="ip-inner" width="100px" height="100px" viewBox="0 0 80 80">
				<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
			</svg>
		</div>

	</div>

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="logo">
				<a href="index.blade.php"><img src="{{asset('images/logo-white.png')}}" alt=""></a>
			</div>

			<div class="header-line">
				<a class="open-menu-toggle" href="#">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>

            <nav class="nav-menu-box">
                <ul class="navi-menu-list">
                    <li class="active">
                        <a href="{{route('home').'#accueil'}}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{route('home').'#categories'}}">Catégories</a>
                    </li>
                    <li>
                        <a href="{{route('home').'#propos'}}">A propos</a>
                    </li>
                    <li>
                        <a href="{{route('home').'#contact'}}">Contact</a>
                    </li>
                </ul>
            </nav>

		</header>
		<!-- End Header -->

		<!-- page-banner-section
			================================================== -->
{{--		<section class="page-banner-section">--}}
{{--			<div class="container">--}}
{{--				<h1>Single Post</h1>--}}
{{--				<p>The art of building</p>--}}
{{--			</div>--}}
{{--		</section>--}}
		<!-- End page-banner section -->

		<div id="content">

			<!-- single-post-section
				================================================== -->
			<section class="single-post-section">
				<div class="section-title">
					<h1>A propos</h1>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="post-content">
								<ul class="meta-list">
									<li>
{{--										<a href="#">--}}
											<i class="far fa-folder-open"></i>
                                            Détails
{{--										</a>--}}
									</li>

								</ul>
								<h3>{{$resume->title}}</h3>
								<div class="post-thumb">
									<img src="{{$resume->image}}" alt="">
								</div>
								<p>{{$resume->resume}}</p>
                                {!! $resume->content !!}
{{--								<h3>Dropcaps</h3>--}}
{{--								<p> <span class="dropcap">D</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>--}}

{{--								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>--}}
{{--                                $resume->content--}}

							</div>
						</div>
						<div class="col-lg-4">
							<div class="sidebar">


								<div class="sidebar-widget widget_categories">
									<h4>Catégories</h4>
									<ul>
										@foreach($categories as $category)
                                            <li><a href="{{route('products',$category->id)}}" style="text-transform: capitalize">{{$category->name}}</a></li>
										@endforeach

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- footer-last-line -->
			<div class="footer-last-line">
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-6">
                            @php
                                $current_year = date('Y')
                            @endphp
                            <p>&copy; Alfenart {{$current_year == 2024 ? '2024' : '2024-'.$current_year}}</p>
                        </div>
						<div class="col-sm-6">
							<ul class="social-list">
								<li>
									<a href="#"><i class="fab fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-twitter-square"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- end footer-last-line -->

		</div>

	</div>
	<!-- End Container -->
</div>

	<!--build:js js/royarch-plugins.min.js -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery.migrate.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/jquery.nouislider.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/jquery.imagesloaded.min.js')}}"></script>
  	<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
	<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/pathLoader.js')}}"></script>
	<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('js/jquery.appear.js')}}"></script>
	<!-- endbuild -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?&amp;sensor=false&amp;language=en"></script>
	<script src="{{asset('js/gmap3.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
