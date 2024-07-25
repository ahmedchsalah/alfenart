<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>{{config('app.name')}}</title>

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
<body class="light-version">

<div id="ip-container" class="ip-container">
	<!-- initial loader -->
	<div class="ip-header">

		<p class="ip-logo">
			<img src="images/logo-white.png" alt="">
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
				<a href="index.blade.php"><img src="{{asset('/images/logo-white.png')}}" alt=""></a>
			</div>

			<a class="open-menu-toggle" href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>

			<nav class="nav-menu-box">
				<ul class="navigation-menu-list">
					<li >
						<a href="#home">Accueil</a>
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
                    <li>
						<a href="#references">Références</a>
					</li>
				</ul>
			</nav>

		</header>
		<!-- End Header -->

		<div id="content">

			<!-- slider-section
				================================================== -->
			<section class="slider-section fullscreen-style" id="home">
				<div id="rev_slider_46_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric1" style="background-color:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
					<div id="rev_slider_46_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
						<ul>
							@foreach ($banners as $banner)
								<!-- SLIDE  -->
								<li data-index="'rs-'{{$banner->id}}" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{$banner->image}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->

									@if($banner->category)
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                             id="slide-149-layer-1"
                                             data-x="['center','center','center','center']"
                                             data-y="['center','center','center','center']"
                                             data-hoffset="['170','0','0','0']"
                                             data-voffset="['-80','-80','-70','-60']"
                                             data-fontsize="['20','20','20','20']"
                                             data-lineheight="['24','26','26','28']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1300"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-responsive_offset="on"
                                             style="z-index: 6; white-space: nowrap;"><span>{{$banner->category}}</span>
                                        </div>
									@endif

									<!-- LAYER NR. 2 -->
									<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
										id="slide-149-layer-2"
										data-x="['center','center','center','center']"
										data-y="['center','center','center','center']"
										data-hoffset="['170','0','0','0']"
										data-voffset="['0','0','0','0']"
										data-fontsize="['72','64','40','30']"
										data-lineheight="['86','76','40','36']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										data-start="1000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										data-elementdelay="0.05"
										style="z-index: 5; white-space: nowrap;">{{$banner->title}}
									</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
										id="slide-149-layer-3"
										data-x="['center','center','center','center']"
										data-y="['center','center','center','center']"
										data-hoffset="['170','0','0','0']"
										data-voffset="['80','70','60','50']"
										data-fontsize="['50','40','30','20']"
										data-lineheight="['60','50','40','30']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										data-start="1300"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">
									</div>

									<!-- LAYER NR. 4 -->
									<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
										id="slide-149-layer-4"
										data-x="['center','center','center','center']"
										data-y="['center','center','center','center']"
										data-hoffset="['170','0','0','0']"
										data-voffset="['160','150','130','120']"
										data-fontsize="['14','14','14','15']"
										data-lineheight="['24','26','26','28']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										data-start="1300"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;"><a href="{{$banner->url ?? '#'}}" target="{{$banner->url ? '_blank' : '_self'}}">Consulter</a>
									</div>

								</li>

							@endforeach


						</ul>

						<div style="" class="tp-static-layers">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption rev-btn tp-static-layer"
								id="slider-1043-layer-2"
								data-x="left" data-hoffset="380, 20, 20, 20"
								data-y="bottom" data-voffset="40, 20, 20, 20"
								data-width="['60']"
								data-height="['60']"

								data-type="button"
								data-actions='[{"event":"click","action":"toggleslider","delay":""}]'
								data-basealign="slide"
								data-responsive_offset="off"
								data-responsive="off"
								data-startslide="0"
								data-endslide="7"
								data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":"sliderenter","ease":"Power2.easeInOut"},{"delay":"sliderleave","speed":500,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 0.65);bs:solid;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[1,1,1,1]"
								data-paddingright="[1,1,1,1]"
								data-paddingbottom="[1,1,1,1]"
								data-paddingleft="[1,1,1,1]">
								<div class="rs-untoggled-content"><i class="fas fa-play"></i></div>
								<div class="rs-toggled-content"><i class="fas fa-pause"></i></div>
							</div>
						</div>
						<p class="fixed-notifier">
							Slide by scroll
							<span></span>
						</p>
					</div>
				</div>
			</section>
			<!-- End slider-section -->

		<!-- blog-section
				================================================== -->
				<section class="blog-section" id="categories">
					<div class="section-title">
						<span>02</span>
						<h1>Catégories</h1>
					</div>
					<div class="container">
						<div class="title-box">
							<h2>Catégories</h2>
						</div>
						<div class="blog-box">
							<div class="row">
								@foreach($categories as $category)
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="blog-post">
                                            <a href="{{route('products', $category->id)}}" class="post-thumbnail" id="product">
                                                <img src="{{$category->image}}" alt="">
                                            </a>
                                            <div class="post-content">
                                                <ul class="meta-list">
                                                    <li>
                                                        <a href="{{route('products', $category->id)}}">
                                                            <i class="far fa-folder-open"></i>
                                                            {{$category->name}}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>{{$category->description}}</p>
                                            </div>
                                        </div>
                                    </div>
								@endforeach
							</div>

						</div>
					</div>
				</section>
				<!-- End blog-section -->

			<!-- tabs-collapse-section
				================================================== -->
			<section class="tabs-collapse-section" id="propos">
				<div class="section-title">
					<span>03</span>
					<h1>A propos</h1>
				</div>

				<div class="container">
					<div class="features-box">
						<div class="row">
							<div class="col-lg-5">
								<div class="feature-content">
									<h3>{{$resume->title}}</h3>
									<p>{{$resume->resume}}</p>
									<a href="{{route('propos')}}" class="theme-button"><span>Plus détails</span></a>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="image-holder">
									<img src="{{$resume->image}}" alt="transformational_designs">
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End tabs-collapse-section -->

			<!-- scroller-section
				================================================== -->
			<!-- End scroller-section -->



			<!-- contact-info-section
				================================================== -->
			<section class="contact-info-section" id="contact">
				<div class="section-title">
					<span>04</span>
					<h1>Contact</h1>
				</div>

				<div class="container">
					<div class="title-box">
						<span>infos de contact</span>
						<h2>Prendre contact</h2>
					</div>
					<div class="contact-info-box">
						<div class="row ">
                            @php
                                $localisationContact = null;
                            @endphp
                            @foreach($firstContacts as $contact)
                                @if($contact['type_name'] == 'localisation')
                                    @php
                                        $localisationContact = $contact;
                                    @endphp
                                @else
                                    <div class="col-lg-4">
                                        <div class="contact-info-post">
                                            <i class=" {{$contact['type_name'] == 'tel' ? 'fas fa-phone' : ($contact['type_name'] == 'adresse' ? 'fas fa-map-marker-alt' : 'fas fa-address-book')}}"></i>
                                            <div class="info-content">
                                                <h4 style="text-transform: capitalize">{{$contact['type_name']}}</h4>
                                                <p >{{$contact['contact']['value']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

						</div>
                        @if($localisationContact)
                            <div class="row ">
                                    {!! $localisationContact['contact']['value'] !!}
                            </div>
                        @endif
					</div>
					<div class="contact-form-box">
						<div class="row ">
							<div class="col-lg-12">
                                <div id="loading-overlay" style="display:none;">
                                    <div id="loading">
                                        <img src="{{asset('/images/loading.gif')}}" alt="Loading...">
                                    </div>
                                </div>
								<form id="contact-form" action="{{route('store_message')}}" method="post" class="frm">
                                    @csrf
									<h4>Envoyer un message</h4>
									<div class="row">
                                        @error('email')
                                            {{$message}}
                                        @enderror
										<div class="col-sm">
											<div class="input-line">
												<label for="name"><i class="fas fa-user"></i></label>
												<input name="full_name" id="name" type="text" placeholder="Nom Complet *" required>
											</div>
											<div class="input-line">
												<label for="email"><i class="fas fa-envelope"></i></label>
												<input name="email" id="email" type="text" placeholder="E-mail *" required>
											</div>
										</div>
                                        <div class="col-sm">
                                            <div class="input-line">
                                                <label for="phone"><i class="fas fa-phone"></i></label>
                                                <input name="phone" id="phone" type="text" placeholder="Téléphone (optional)">
                                            </div>
                                            <div class="input-line">
                                                <label for="business"><i class="fas fa-user-tie"></i></label>
                                                <input name="business" id="business" type="text" placeholder="Entreprise (optional)">
                                            </div>
                                        </div>
										<div class="col-sm">
											<div class="input-line">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
											<button type="submit" id="bt">
												Envoyer
											</button>

										</div>
									</div>
									<div id="msg"></div>
                                    <div id="success"></div>
								</form>


							</div>
{{--							<div class="col-lg-4">--}}
{{--								<div id="map"></div>--}}
{{--							</div>--}}

						</div>
					</div>
				</div>

			</section>
			<!-- End contact-info-section -->

			<!-- footer
				================================================== -->

                <section id="references">
                    <footer class="template-footer" >
                        <div class="container">
                            <a class="go-top" href="#">
                                <i class="far fa-arrow-alt-circle-up"></i>
                            </a>

                            <div class="instagram-line" >

                                <ul class="insta-list">
                                    @foreach($references as $reference)
                                        <li><img src="{{$reference->image}}" alt=""></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </footer>
                </section>
                <!-- End footer -->

                <!-- footer-last-line -->
                <div class="footer-last-line">
                    <div class="container">
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
                                        <a href="{{env('FACEBOOK_LINK', '#')}}"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{env('INSTAGRAM_LINK', '#')}}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{env('LINKEDIN_LINK','#')}}"><i class="fab fa-linkedin"></i></a>
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

	<!--build:js js/Archios-plugins.min.js -->
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
{{--	<script src="{{asset('js/app.js')}}"></script>--}}
<script>
    let messageURL = "{{route('store_message')}}";
    const btn = document.getElementById('bt')
    btn.addEventListener('click' , function (e) {
        e.preventDefault()
        const form = document.getElementById('contact-form')
        const formData = new FormData(document.getElementById('contact-form'))
        const loadingOverlay = document.getElementById('loading-overlay');
        let success = document.getElementById('success')
        loadingOverlay.style.display = 'flex';
        $.ajax({
            type : 'post',
            headers : {
                'X-CSRF-TOKEN' : '{{csrf_token()}}'
            },
            url : messageURL,
            data : $('.frm').serializeArray(),
            success : (response) =>{
                if (typeof response === 'string') {
                    response = JSON.parse(response);
                }
                console.log(response)

                success.style.color = 'green';
                success.style.fontSize = '20px';
                success.innerHTML = `<i class="fas fa-check"></i>   ${response.message}`;

                setTimeout(()=>{
                    success.innerHTML=''
                },4000)
                form.reset()
                loadingOverlay.style.display = 'none';
            },
            error : (response)=>{
                console.log(response)
                success.style.color = 'red'
                success.style.fontSize = '20px'
                success.innerHTML = `<i class="fas fa-exclamation-triangle"></i>     Une erreur est survenue. Veuillez réessayer plus tard.`
                setTimeout(()=>{
                    success.innerHTML=''
                },4000)
                form.reset()
                loadingOverlay.style.display = 'none';
            }
        })
    })
</script>


	<!-- END REVOLUTION SLIDER -->
	<script>
		var tpj=jQuery;
		var revapi46;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_46_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_46_1");
			}else{
				revapi46 = tpj("#rev_slider_46_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
						arrows: {
							style:"gyges",
							enable:true,
							hide_onmobile:false,
							hide_under:600,
							hide_onleave:false,
							hide_delay:200,
							hide_delay_mobile:1200,
							left: {
								h_align:"right",
								v_align:"bottom",
								h_offset: 50,
								v_offset: 50
							},
							right: {
								h_align:"right",
								v_align:"bottom",
								h_offset: 50,
								v_offset: 122
							}
						},
						bullets:{
							enable:true,
							hide_onmobile:true,
							hide_onleave:false,
							hide_delay:200,
							hide_under:0,
							hide_over:9999,
							tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>',
							direction:"vertical",
							space:7,
							h_align:"right",
							v_align:"bottom",
							h_offset: 70,
							v_offset: 210
						}
                    },
					viewPort: {
						enable:true,
						outof:"pause",
						visible_area:"80%",
						presize:false
					},
					responsiveLevels:[1170,1280,778,480],
					gridwidth:[1170,1280,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:2000,
						levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
						type:"mouse",
					},
					shadow: 0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/
	</script>


</body>
</html>
