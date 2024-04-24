<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Syngenta Landing Page</title>
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
            background-image: url('{{ asset('frontend/assets/images/bg4.jpg') }}');
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
                        <a href="{{ route('home') }}" class="nav-link" style="color: black;font-weight: bold;font-size: 16px;">Home</a>
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
                        <a href="{{ route('contact') }}" class="nav-link" style="color: black;font-size: 16px;">Contact</a>
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