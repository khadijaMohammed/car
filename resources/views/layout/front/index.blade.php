


<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KwitaraCars - Bootstrap Cars Dealer Template </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front/fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('front/fonts/themify-icons/themify-icons.css')}}"type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{asset('front/css/price-range.css')}}" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="{{asset('front/css/colors.css')}}" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/rs-plugin/css/settings.css')}}">

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">
        
        <div class="account-popup-sec"> 
           
            <div class="account-popup-area">
                <div class="account-popup">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="account-user">
                                <div class="logo">
                                    <a href="#" title="">
                                        <i class="fa fa-get-pocket"></i>
                                        <span>KwitaraCars</span>
                                        <strong>SELL VEHICULS</strong>
                                    </a>
                                </div><!-- LOGO -->
                                <form>
                                    <h1>Login Form</h1>
                                    <div class="field">
                                        <input type="text" placeholder="Username" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Password" />
                                    </div>
                                    <div class="field">
                                        <input type="submit" value="SEND NOW" class="flat-btn" />
                                    </div>
                                </form>
                                <i>OR</i>
                                <span>LOGIN WITH</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <span class="close-popup"><i class="fa fa-close"></i></span>
                </div>
            </div>
        </div><!-- Account Popup Sec -->

        <header class="simple-header for-sticky ">
          
            <div class="menu">
          
                <div class="container">
                    <div class="logo">
                        <a href=  "{{route('home')}}"  title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>KwitaraCars</span>
                            <strong>SELL VEHICULS</strong>
                        </a>
                    </div><!-- LOGO -->
                   
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <h1 class="nocontent outline">--- Main Navigation ---</h1>
                        <ul>
                            <li class="menu-item">
                                <a href= "{{route('home')}}"  title="">HOME</a>
                               
                            </li>
                            <li class="menu-item">
                                <a href="{{route('vehiculs3')}}" title="">VEHICULS</a>
                             
                            </li>
                            <li><a href="{{route('vehicul')}}"  title="">VEHICUL</a></li>

                          
                          
                            <li><a href="{{route('contact')}}" title="">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>        
{{$slot}}
   
             

        <footer>
            <section class="top-line">
                <div style="background: url(front/img/footer.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
                <div class="container">
                    <div class="row">   

                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href ="{{route('home')}}"  title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="{{route('home')}}" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="{{route('vehiculs')}}"title=""><i class="fa fa-angle-right"></i> Vehicle</a></li> 
                                    <li><a href="{{route('contact')}}" title=""><i class="fa fa-angle-right"></i> contact</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> Places</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="{{route('home')}}"  title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="{{route('home')}}"  title=""><i class="fa fa-angle-right"></i> About us </a></li>
                                    <li><a href="{{route('vehiculs')}}"  title=""><i class="fa fa-angle-right"></i> Vehicle</a></li>
                                    <li><a href="{{route('contact')}}"  title=""><i class="fa fa-angle-right"></i> contact</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>
          
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="{{asset('front/js/modernizr.js')}}"></script><!-- Modernizer -->
    <script type="text/javascript" src="{{asset('front/js/jquery-1.10.2.min.js')}}"></script><!-- Jquery -->
    <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('front/s/owl.carousel.min.js')}}"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="{{asset('front/js/html5lightbox.js')}}"></script><!-- HTML -->
    <script type="text/javascript" src="{{asset('front/js/scrolly.js')}}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{asset('front/js/price-range.js')}}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{asset('front/js/script.js')}}"></script><!-- Script -->

    <script src="{{asset('front/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
    <script src="{{asset('front/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 700,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });

            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 30,
                items: 5,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>
</body>
</html>