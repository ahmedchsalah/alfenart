<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Archios</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>

<div id="ip-container" class="ip-container">
	<!-- initial loader -->
	<div class="ip-header">

		<p class="ip-logo">
			<img src="{{asset('images/logo.png')}}" alt="">
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
				<a href="index.blade.php"><img src="{{asset('images/logo.png')}}" alt=""></a>
			</div>

			<div class="header-line">
				<a class="open-menu-toggle" href="#">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>

            <nav class="nav-menu-box">
                <ul class="navigation-menu-list">
                    <li class="active">
                        <a href="#accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="#categories">Catégories</a>
                    </li>
                    <li>
                        <a href="#propos">A propos</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>

		</header>
		<!-- End Header -->

		<!-- page-banner-section
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Portfolio</h1>
				<p>The modern architect with innovation</p>
			</div>
		</section>
		<!-- End page-banner section -->

		<div id="content">

			<!-- portfolio-section
				================================================== -->
			<section class="portfolio-section">
				<div class="section-title">
					<h1>Portfolio</h1>
				</div>
				<div class="container">
					<div class="portfolio-box iso-call">

						<div class="portfolio-post interior">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio1.jpg')}}" alt="portfolio1"/>
								<figcaption>
									<p>Interior.</p>
									<h4><a href="single-project.blade.php">Influenced by Power</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post houses villas">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio2.jpg')}}" alt="portfolio2"/>
								<figcaption>
									<p>Cultural.</p>
									<h4><a href="single-project.blade.php">Influenced by Power</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post interior">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio3.jpg')}}" alt="portfolio3"/>
								<figcaption>
									<p>Interior.</p>
									<h4><a href="single-project.blade.php">Thoughtfully making Space</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post buildings">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio4.jpg')}}" alt="portfolio4"/>
								<figcaption>
									<p>Flats.</p>
									<h4><a href="single-project.blade.php">Unique Solution</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post wood">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio5.jpg')}}" alt="portfolio5"/>
								<figcaption>
									<p>wood.</p>
									<h4><a href="single-project.blade.php">Magnificent Assembled</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post exterior houses">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio6.jpg')}}" alt="portfolio6"/>
								<figcaption>
									<p>exterior.</p>
									<h4><a href="single-project.blade.php">Innovation in Craft</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post wood">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio7.jpg')}}" alt="portfolio7"/>
								<figcaption>
									<p>wood.</p>
									<h4><a href="single-project.blade.php">Well-simplified design</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post buildings metal">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio8.jpg')}}" alt="portfolio8"/>
								<figcaption>
									<p>metal.</p>
									<h4><a href="single-project.blade.php">Design your dreams with us</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post exterior houses villas">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio9.jpg')}}" alt="portfolio9"/>
								<figcaption>
									<p>exterior.</p>
									<h4><a href="single-project.blade.php">Level of evolution</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post metal">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio10.jpg')}}" alt="portfolio10"/>
								<figcaption>
									<p>aluminium.</p>
									<h4><a href="single-project.blade.php">You bet it looks so good </a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post buildings">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio11.jpg')}}" alt="portfolio11"/>
								<figcaption>
									<p>high buildings.</p>
									<h4><a href="single-project.blade.php">The Joy of Living</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

						<div class="portfolio-post interior">
							<figure class="effect-milo">
								<img src="{{asset('upload/architecture/portfolio/portfolio12.jpg')}}" alt="portfolio12"/>
								<figcaption>
									<p>interior.</p>
									<h4><a href="single-project.blade.php">The Joy of Living</a></h4>
									<a href="#">
										<span class="material-icons-outlined">
											article
										</span>
									</a>
								</figcaption>
							</figure>
						</div>

					</div>
				</div>
			</section>
			<!-- End portfolio-section -->

			<!-- footer
				================================================== -->
			<footer class="template-footer">
				<a class="go-top" href="#">
					<i class="far fa-arrow-alt-circle-up"></i>
				</a>

				<div class="instagram-line">
					<div class="container">
						<ul class="insta-list">
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/1.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/2.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/3.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/4.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/5.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/6.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/7.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('upload/architecture/instagram/8.png')}}" alt=""></a></li>
						</ul>
					</div>
				</div>

				<div class="widget-part-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="footer-widget-line">
									<h5>Locations</h5>
									<ul class="custom-list">
										<li><a href="#">Melbourne</a></li>
										<li><a href="#">Berlin</a></li>
										<li><a href="#">New York</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="footer-widget-line">
									<h5>Connect</h5>
									<ul class="custom-list">
										<li><a href="#">instagram</a></li>
										<li><a href="#">facebook</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="footer-widget-line">
									<h5>Get in Touch</h5>
									<ul class="custom-list">
										<li><a href="#">hello@Archiostheme.com</a></li>
										<li><a href="#">0055 1200 6700</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</footer>
			<!-- End footer -->

			<!-- footer-last-line -->
			<div class="footer-last-line">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<p>&copy; Archios 2021</p>
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

	<!--build:js js/archios-plugins.min.js -->
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
