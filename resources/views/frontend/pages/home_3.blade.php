<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Salimo - One Page Parallax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/css/skins/green.css') }}" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/js/plugins/revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/js/plugins/revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('frontend/assets/js/plugins/revolution/css/navigation.css') }}" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset ('frontend/assets/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script type="text/javascript" src="{{ asset ('frontend/assets/js/modernizr.js') }}"></script>

</head>

<body class="">
    <!-- Preloader Starts -->
    {{-- <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="img/styleswitcher/logos/logos-dark/green.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div> --}}
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <img src="{{ asset ('frontend/assets/img/styleswitcher/blue.png') }}" alt="" width="30" height="30" /></a>





                    {{-- <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="{{ asset ('frontend/assets/img/styleswitcher/blue.png') }}" alt="" width="30" height="30" /></a> --}}
                </li>
                
            </ul>

           

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header id="header" class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar navbar-expand-lg p-0" id="singlepage-nav">
					<!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand link-menu scroll-to-target" href="#mainslider">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="{{ asset ('frontend/assets/img/styleswitcher/logos/orange.png') }}" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="{{ asset ('frontend/assets/img/styleswitcher/logos/logos-dark/orange.png') }}" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
					<!-- Logo Ends -->
					<!-- Hamburger Icon Starts -->
                    <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Hamburger Icon Ends -->
					<!-- Navigation Menu Starts -->
                    <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
                        <ul class="nav-menu-inner ml-auto">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#mainslider"><i class="fa fa-home"></i> home</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#about"><i class="fa fa-user"></i> about</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#services"><i class="fa fa-cog"></i> services</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#portfolio"><i class="fa fa-image"></i> portfolio</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#team"><i class="fa fa-user"></i> team</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#blog"><i class="fa fa-comments"></i> blog</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse.show" class="link-menu" href="#contact"><i class="fa fa-envelope"></i> contact</a></li>
                        </ul>
                    </div>
					<!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
		<!-- Header Ends -->
        <!-- Main Slider Section Starts -->
        
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.easing.1.3.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAFnEvJfyoQ8unR5hK1u87h73EdYP46-hE"></script>
    <script type="text/javascript" src="js/plugins/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.filterizr.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.singlePageNav.min.js"></script>

    <!-- Revolution Slider Main JS Files -->
    <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider Extensions -->

    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script type="text/javascript" src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- Revolution Slider Initialization Starts -->
    <script type="text/javascript">
        (function() {
            "use strict";
            var tpj = jQuery;
            var revapi104;
            tpj(document).ready(function() {
                if (tpj("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi104 = tpj("#rev_slider").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
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
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 960,
                                style: "zeus",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 80,
                                v_offset: 50,
                                space: 5,
                                
                            }
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [868, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                            disable_onmobile: "on"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                    var newCall = new Object(),
                        cslide;

                    newCall.callback = function() {
                        var proc = revapi104.revgetparallaxproc(),
                            fade = 1 + proc,
                            scale = 1 + (Math.abs(proc) / 10);

                        punchgs.TweenLite.set(revapi104.find('.slotholder, .rs-background-video-layer'), {
                            opacity: fade,
                            scale: scale
                        });
                    }
                    newCall.inmodule = "parallax";
                    newCall.atposition = "start";

                    revapi104.bind("revolution.slide.onloaded", function(e) {
                        revapi104.revaddcallback(newCall);
                    });
                }
            });
			
			// GOOGLE MAP
			function init_map() {
				
				var myOptions = {
					scrollwheel: false,
					zoom: 12,
					center: new google.maps.LatLng(40.7127837, -74.00594130000002),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
				var marker = new google.maps.Marker({
					map: map,
					icon: "img/markers/green.png",
					position: new google.maps.LatLng(40.7127837, -74.00594130000002)
				});
				var infowindow = new google.maps.InfoWindow({
					content: "<strong>SALIMO</strong><br>1234 Disney Street, New York City<br>"
				});
				google.maps.event.addListener(marker, "click", function() {
					infowindow.open(map, marker);
				});
			}
			google.maps.event.addDomListener(window, "load", init_map);
			
        })(jQuery);
    </script>
    <!-- Revolution Slider Initialization Ends -->
</body>


<!-- Mirrored from slimhamdi.net/salimo/demos/index-scroll-effects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 16:42:15 GMT -->
</html>