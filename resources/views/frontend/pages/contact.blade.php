<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nazmul Personal Portfolio</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="ThemesBoss" />

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />

    <!-- Materialdesign icons Css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/materialdesignicons.min.css') }}">

    <!-- Mobirise icons Css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mobiriseicons.css') }}">

    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

    <!-- Custom style Css -->
    {{-- <link rel="stylesheet" href="{{asset ('frontend/assets/css/style.css') }}"> --}}

    <style>
        .home-bg {
            position: relative;
            background-image: url('{{ asset('frontend/assets/images/contact.png') }}');
            /* background-image: url('{{ asset('frontend/assets/images/bg.jpg') }}'); */
            /* background-image: url('{{ asset('frontend/assets/images/WEB-PAGE.png') }}'); */
            background-size: cover;
            background-position: center;
            height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .navbar {
            z-index: 9999;
        }

        .home-bg .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home-bg .navbar {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }

        .nav-link {
            margin-right: 30px;
        }

        .navbar-nav {
            width: 100%;
            text-align: center;
        }

        .navbar-nav .nav-item {
            display: inline-block;
        }


        @media (max-width: 991px) {
            .navbar-nav {
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="#">
                <img style="height: 50px; width: 140px;" src="{{ asset('frontend/assets/images/syngenta.png') }}" alt="" class="img-fluid logo-light">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse" style="transform: translateX(200px);">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link" style="color: black;font-size: 16px;">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('registration') }}" class="nav-link" style="color: black; font-size: 16px;">Registration</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a href="{{ route('registration') }}" class="nav-link" style="color: black;=font-size: 16px;">Registration</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('result') }}" class="nav-link" style="color: black;=font-size: 16px;">Result</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link" style="color: black;font-size: 16px;font-weight: bold;">Contact</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" onsubmit="performRandomSearch(event)">
                            <div class="input-group">
                                <input id="searchQuery" class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">
                                    <span class="bi bi-search"></span>
                                </button>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Start Home -->
    <section class="home-bg section h-100vh" id="home">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="home-content">
                        <!-- Content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->
    <!-- END HOME -->
    <!-- JAVASCRIPTS -->
    <script src="{{ asset ('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--EASING JS-->
    <script src="{{asset ('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{asset ('frontend/assets/js/scrollspy.min.js') }}"></script>
    <!-- TYPED -->
    <script src="{{asset ('frontend/assets/js/typed.js') }}"></script>
    <!-- MFP JS -->
    <script src="{{asset ('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--PORTFOLIO FILTER JS-->
    <script src="{{asset ('frontend/assets/js/isotope.js') }}"></script>
    <!-- CONTACT JS -->
    <script src="{{asset ('frontend/assets/js/contact.js') }}"></script>
    <!--CUSTOM JS-->
    <script src="{{asset ('frontend/assets/js/custom.js') }}"></script>


</body>


</html> 
 
 
 
 
 
 <!-- CONTACT FORM START-->
{{-- <section class="section " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Get In <span class="fw-bold">Tuch</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>  
        <div class="row mt-4 pt-lg-4">
            <div class="col-lg-4">
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-mobile2 text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Call Us On</p>
                        <p class="text-muted">+985 123 7856</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-letter text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Email Us At</p>
                        <p class="text-muted">exmaple@gmail.com</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-pin text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Visit Office</p>
                        <p class="text-muted">202, Grasselli Street , Conway.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact_form">
                    <div id="message"></div>
                    <form method="post" action="https://elvish-bootstrap-mvc-asp.netlify.app/html/php/contact.php" name="contact-form" id="working_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2 mb-3">
                                    <label for="name" class="fw-bold mb-2">Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2 mb-3">
                                    <label for="email" class="fw-bold mb-2">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2 mb-3">
                                    <label for="subject" class="fw-bold mb-2">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2 mb-3">
                                    <label for="comments" class="fw-bold mb-2">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom">Send Message</button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>                          
    </div>
</section>  --}}
<!-- CONTACT FORM END-->