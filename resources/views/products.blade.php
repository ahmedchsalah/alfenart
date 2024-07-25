<!doctype html>


<html lang="en" class="no-js">
<head>
    <title>Produits</title>

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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">

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
                <a href="{{route('home')}}"><img src="{{asset('/images/logo-white.png')}}" alt=""></a>
            </div>

            <a class="open-menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <nav class="nav-menu-box">

                <ul class="navi-menu-list">
                    <li >
                        <a href="{{route('home').'/#accueil'}}">Accueil</a>
                    </li>
                    <li class="active">
                        <a href="{{route('home').'/#categories'}}">Catégories</a>
                    </li>
                    <li>
                        <a href="{{route('home').'/#propos'}}">A propos</a>
                    </li>
                    <li>
                        <a href="{{route('home').'/#contact'}}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('home').'/#references'}}">Références</a>
                    </li>
                </ul>
            </nav>

        </header>
        <!-- End Header -->

        <div id="content">

            <!-- slider-section
                ================================================== -->
            <!-- End slider-section -->

            <!-- blog-section
                    ================================================== -->
            <section class="blog-section" >
{{--                <div class="section-title">--}}
{{--                    <span>02</span>--}}
{{--                    <h1>Catégories</h1>--}}
{{--                </div>--}}
                <div class="container">
                    <div class="title-box">
                        <h2>Produits de {{$categoryName}}</h2>
                    </div>
                    <div class="blog-box">
                        <div class="row" style="{{$products->count()==0 ? 'height : 50vh' : ''}}">
                            @forelse($products as $product)
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="blog-post" >
                                        <a href="#" class="post-thumbnail">
                                            <img src="{{$product->image}}" alt="">
                                        </a>
                                        <div class="post-content">
                                            <ul class="meta-list">
                                                <li>
                                                    <a href="#" style="pointer-events: none">
                                                        <i class="far fa-folder-open"></i>
                                                        {{$product->name}}
                                                    </a>
                                                </li>
                                            </ul>
                                            <p >{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                    <p style="display: flex; justify-content: center; align-items: center; font-size: 24px"><i class="fas fa-exclamation-circle" style="margin-right: 10px"></i> Aucun résultat trouvé</p>
                        </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            </section>
            <!-- End blog-section -->

            <!-- tabs-collapse-section
                ================================================== -->
            <!-- End tabs-collapse-section -->

            <!-- scroller-section
                ================================================== -->
            <!-- End scroller-section -->



            <!-- contact-info-section
                ================================================== -->
            <!-- End contact-info-section -->

            <!-- footer
                ================================================== -->

            <!-- End footer -->

            <!-- footer-last-line -->
        <div class="footer-last-line">
            <div class="container" style="float: right">
                <div class="row">
                    <div class="col-sm-6 " >
                        @php
                            $current_year = date('Y')
                        @endphp
                        <p>&copy; Alfenart {{$current_year == 2024 ? '2024' : '2024-'.$current_year}}</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="social-list">
                            <li>
                                <a href="{{env('FACEBOOK_LINK','#')}}"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="{{env('INSTAGRAM_LINK','#')}}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{env('LINKEDIN_LINK','#')}}"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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



<!-- END REVOLUTION SLIDER -->
{{--<script>--}}
{{--    var tpj=jQuery;--}}
{{--    var revapi46;--}}
{{--    tpj(document).ready(function() {--}}
{{--        if(tpj("#rev_slider_46_1").revolution == undefined){--}}
{{--            revslider_showDoubleJqueryError("#rev_slider_46_1");--}}
{{--        }else{--}}
{{--            revapi46 = tpj("#rev_slider_46_1").show().revolution({--}}
{{--                sliderType:"standard",--}}
{{--                jsFileLocation:"js/",--}}
{{--                sliderLayout:"fullscreen",--}}
{{--                dottedOverlay:"none",--}}
{{--                delay:9000,--}}
{{--                navigation: {--}}
{{--                    keyboardNavigation: "off",--}}
{{--                    keyboard_direction: "horizontal",--}}
{{--                    mouseScrollNavigation: "off",--}}
{{--                    onHoverStop: "off",--}}
{{--                    touch: {--}}
{{--                        touchenabled: "on",--}}
{{--                        swipe_threshold: 75,--}}
{{--                        swipe_min_touches: 1,--}}
{{--                        swipe_direction: "horizontal",--}}
{{--                        drag_block_vertical: false--}}
{{--                    },--}}
{{--                    arrows: {--}}
{{--                        style:"gyges",--}}
{{--                        enable:true,--}}
{{--                        hide_onmobile:false,--}}
{{--                        hide_under:600,--}}
{{--                        hide_onleave:false,--}}
{{--                        hide_delay:200,--}}
{{--                        hide_delay_mobile:1200,--}}
{{--                        left: {--}}
{{--                            h_align:"right",--}}
{{--                            v_align:"bottom",--}}
{{--                            h_offset: 50,--}}
{{--                            v_offset: 50--}}
{{--                        },--}}
{{--                        right: {--}}
{{--                            h_align:"right",--}}
{{--                            v_align:"bottom",--}}
{{--                            h_offset: 50,--}}
{{--                            v_offset: 122--}}
{{--                        }--}}
{{--                    },--}}
{{--                    bullets:{--}}
{{--                        enable:true,--}}
{{--                        hide_onmobile:true,--}}
{{--                        hide_onleave:false,--}}
{{--                        hide_delay:200,--}}
{{--                        hide_under:0,--}}
{{--                        hide_over:9999,--}}
{{--                        tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>',--}}
{{--                        direction:"vertical",--}}
{{--                        space:7,--}}
{{--                        h_align:"right",--}}
{{--                        v_align:"bottom",--}}
{{--                        h_offset: 70,--}}
{{--                        v_offset: 210--}}
{{--                    }--}}
{{--                },--}}
{{--                viewPort: {--}}
{{--                    enable:true,--}}
{{--                    outof:"pause",--}}
{{--                    visible_area:"80%",--}}
{{--                    presize:false--}}
{{--                },--}}
{{--                responsiveLevels:[1170,1280,778,480],--}}
{{--                gridwidth:[1170,1280,778,480],--}}
{{--                gridheight:[868,768,960,720],--}}
{{--                lazyType:"none",--}}
{{--                parallax: {--}}
{{--                    type:"mouse",--}}
{{--                    origo:"slidercenter",--}}
{{--                    speed:2000,--}}
{{--                    levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],--}}
{{--                    type:"mouse",--}}
{{--                },--}}
{{--                shadow: 0,--}}
{{--                spinner:"off",--}}
{{--                stopLoop:"off",--}}
{{--                stopAfterLoops:-1,--}}
{{--                stopAtSlide:-1,--}}
{{--                shuffle:"off",--}}
{{--                autoHeight:"off",--}}
{{--                hideThumbsOnMobile:"off",--}}
{{--                hideSliderAtLimit:0,--}}
{{--                hideCaptionAtLimit:0,--}}
{{--                hideAllCaptionAtLilmit:0,--}}
{{--                debugMode:false,--}}
{{--                fallbacks: {--}}
{{--                    simplifyAll:"off",--}}
{{--                    nextSlideOnWindowFocus:"off",--}}
{{--                    disableFocusListener:false,--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    });	/*ready*/--}}
{{--</script>--}}


</body>
</html>

