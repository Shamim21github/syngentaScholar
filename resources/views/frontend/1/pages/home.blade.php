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

        <link rel="shortcut icon" href="{{ asset('Frontend/assets/images/favicon.ico') }}">

        <!--Bootstrap Css-->
        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" />

        <!-- Materialdesign icons Css -->
        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/materialdesignicons.min.css') }}">

        <!-- Mobirise icons Css -->
        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/mobiriseicons.css') }}">

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css') }}">

        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css') }}">

        <!-- Custom style Css -->
        <link rel="stylesheet" href="{{asset ('Frontend/assets/css/style.css') }}">
    </head>

    <body>

        <!-- START LOADER -->
        {{-- <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div> --}}
        <!-- END LOADER -->

        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class='navbar-brand logo' href='#'>
                        <img style="height: 50px; width:140px;" src="{{ asset('Frontend/assets/images/nazmul.png') }}" alt="" class="img-fluid logo-light"> 
                        <img style="height: 50px; width:140px;" src="{{ asset('Frontend/assets/images/nazmulDark.png') }}" alt="" class="img-fluid logo-dark">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#work" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Client</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- Start All Cards -->
        <!--Start Home-->
        <section class="home-bg section h-100vh" id="home">
            <div class="bg-overlay"></div>
                <div class="container z-index">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="text-white text-center">
                                {{-- <h4>Hello & Welcome</h4> --}} <br> <br> <br>  <br> <br> <br>  <br> <br> <br> 
                                <h1 class="header_title mb-0 mt-3">I Am <span class="element fw-bold" data-elements="Nazmul Hossain., HR Professional., Learning & OD Practitioner., Recruiter & Head Hunter., Process Development Consultant"></span></h1>
                                <ul class="social_home list-unstyled text-center pt-4">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/nazmulju41" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nazmulju41" target="_blank"><i class="mdi mdi-linkedin" ></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" target="_blank"><i class="mdi mdi-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" target="_blank"><i class="mdi mdi-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
                                </ul>
                                <div class="header_btn">
                                    <a href="javascript:void(0)" class="btn btn-outline-custom btn-rounded mt-4" target="_blank">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="scroll_down">
                <a href="#about" class="scroll">
                    <i class="mbri-arrow-down text-white"></i>
                </a>
            </div>
        </section>
        <!--END HOME-->

        <!-- START ABOUT -->
        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="fw-bold">About </span>Me</h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            {{-- <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div>
                            <img src="assets/images/sign.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="text-center about-detail mx-auto mt-5">
                            <h3 class="mb-3">Hello! <span class="fw-bold text-custom">I'M Nazmul Hossain.</span></h3>
                            <ul class="mb-0 list-inline text-center about-work">
                                <li class="list-inline-item me-0 text-muted">HR Professional</li>
                                <li class="list-inline-item me-0 text-muted">Learning & OD Practitioner</li>
                                <li class="list-inline-item me-0 text-muted">Recruiter & Head Hunter</li>
                                <li class="list-inline-item me-0 text-muted">Photographer</li>
                            
                            </ul>
                            <p class="text-muted mt-3">I am ayoung HR professional having solid working experience of more than 06 years at large conglomerates of the country such as IFAD Group, Bengal Group of Industries, and Beximco Limited. Besides these, he served for BRAC as a Consultant in the Skill Development Program and as a Trainer in the Entrepreneurial Development Project initiated by BRAC Bank & BRAC University. He also plays the role of Training & Consulting Coordinator at Mind
                            Works which is one of the prominent global training & consultancy organizations.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark fw-bold float-left">HR Professional</div>
                                <div class="text-muted float-right">80%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Learning & OD Practitioner1</div>
                                <div class="text-muted float-right">59%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Recruiter & Head Hunter</div>
                                <div class="text-muted float-right">88%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Photographer</div>
                                <div class="text-muted float-right">58%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:58%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            {{-- <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Learning & OD Practitioner2</div>
                                <div class="text-muted float-right">96%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                            <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Recruiter & Head Hunter</div>
                                <div class="text-muted float-right">70%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark fw-bold float-left">Photographer</div>
                                <div class="text-muted float-right">58%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:58%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT -->

        <!-- START SERVICES -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>My <span class="fw-bold">Services</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-database"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Graphic Design</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-website-theme"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Unlimited Color</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-growing-chart"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Media Marketing</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-wifi"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Unlimited Wifi</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-responsive"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Responsive Design</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-edit"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="fw-bold">Easy to customize</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SERVICES -->

        <!-- END FUNFACTS -->
        <section class="section bg-funfact">
            <div class="bg-overlay"></div>
            <div class="container z-index">
                <div class="row" id="counter">
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-timer h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="654">4</h1>
                            <p class="lan_fun_name mb-0">Working Hours</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-gift h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="6400">10</h1>
                            <p class="lan_fun_name mb-0">Completed Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-user h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="2389">201</h1>
                            <p class="lan_fun_name mb-0">No. of Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-users h1"></i>
                            </div>                       
                            <h1 class="lan_fun_value mb-1" data-count="653">2</h1>
                            <p class="lan_fun_name mb-0">Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START FUNFACTS -->

        <!-- START EXP. & EDU. -->
        <section class="section" id="education">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="fw-bold">Education & Experiance</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-5">
                        <div class="cv_edu_exp mt-3">
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2014 - 2016</div>
                                        <div class="cb_edu_exp_detail"> 
                                            <h4>Master of Business Administration</h4>
                                            <p class="cv_desc mb-0">- at Jahangirnagar University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2010 - 2014</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Bachelor of Business Administration</h4>
                                            <p class="cv_desc mb-0">- at Jahangirnagar University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2016 - 2023</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Bachelor of Laws</h4>
                                            <p class="cv_desc mb-0">- at Ideal Law College</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="cv_edu_exp mt-3">
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2010 - 2014</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Senior Graphic Designer</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2014 - 2016</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Web Developer</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">2016 - 2023</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Freelancer And Themeforest</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <!-- END EXP. & EDU. -->

        <!-- START CTA -->
        <section class="section bg-cta">
            <div class="bg-overlay"></div>
            <div class="container z-index">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-white">
                            <h1>I Am Available For Counselling.</h1>
                            <div class="mt-4">
                                <a href="https://www.linkedin.com/in/nazmulju41" target="_blank" class="btn btn-outline-custom">Hire Me!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CTA -->

        <!--START WORK -->   
        <section class="section text-center" id="work">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Our <span class="fw-bold">Work</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                            <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".work">Work</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5 work-filter">
                    <div class="col-lg-4 webdesign wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/1.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/1.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4 class="mb-0">UI Elements, Icons</h4>
                                    <h6 class="mb-0">Studio &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/2.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/2.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations</h4>
                                    <h6>Creative &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/3.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/3.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Media, Icons</h4>
                                    <h6>Open Imagination</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/4.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/4.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Graphics, UI Elements</h4>
                                    <h6>Locked Steel Gate</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/5.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/5.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations, Graphics</h4>
                                    <h6>Mac Sunglasses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset('Frontend/assets/images/works/6.jpg') }}"></a>
                            <div class="work_images">
                                <img src="{{ asset('Frontend/assets/images/works/6.jpg') }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>UI Elements, Media</h4>
                                    <h6>Backpack Contents</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END WORK -->

        <!-- START CLIENT -->
        <section class="section bg-client" id="client">
            <div class="bg-overlay"></div>
            <div class="container z-index">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto text-white section-main-title">
                            <h2>Our <span class="fw-bold">Client</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active text-white people_says text-center">
                                    <div class="people_icon">
                                        <i class="mbri-user"></i>                                
                                    </div>
                                    <div class="people_review_box mt-4">
                                        <p class="people_name text-white h5 fw-bold mb-0">Kirk McFall</p>
                                        <p class="h6">Google</p>
                                        <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                    </div>
                                </div>
                                <div class="carousel-item text-white people_says text-center">
                                    <div class="people_icon">
                                        <i class="mbri-user"></i>                                
                                    </div>
                                    <div class="people_review_box mt-4">
                                        <p class="people_name text-white h5 fw-bold mb-0">Edward Evans</p>
                                        <p class="h6">Google</p>
                                        <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                    </div>
                                </div>
                                <div class="carousel-item text-white people_says text-center">
                                    <div class="people_icon">
                                        <i class="mbri-user"></i>                                
                                    </div>
                                    <div class="people_review_box mt-4">
                                        <p class="people_name text-white h5 fw-bold mb-0">Antonio Hernandez</p>
                                        <p class="h6">Google</p>
                                        <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENT -->

        <!-- START GREAT PEOPLE -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Trusted by <span class="fw-bold">Great People</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END GREAT PEOPLE -->

        <!-- START SUBCRIBE  -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="fw-bold">Subscribe</span> to Newsletter </h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div class="text-center subcribe-newslatter mt-4">
                            <form class="mx-auto position-relative">
                                <input type="text" placeholder="Email" required>
                                <button type="submit" class="btn btn-custom">Subcribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SUBCRIBE -->

        <!-- START BLOG -->
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Our <span class="fw-bold">Blog</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-4 mt-3">
                        <div class="text-center rounded bg-white p-2">
                            <div class="img_blog">
                                <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>There are many variations</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Lifestyle</a></p>
                                    <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)" class="text-dark fw-bold">By Envato</a></p>
                                    <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                    <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="text-center rounded bg-white p-2">
                            <div class="blog_video position-relative">
                                <div class="img_blog">
                                    <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                </div>
                                <a href="http://vimeo.com/99025203" class="blog_play"><i class="mdi mdi-play"></i></a>
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>Contrary to popular belief</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Travel</a></p>
                                    <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)" class="text-dark fw-bold">By Envato</a></p>
                                    <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                    <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="text-center rounded bg-white p-2">
                            <div class="img_blog">                                
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/blog/blog-4.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/blog/blog-5.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="mbri-arrow-prev" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="mbri-arrow-next" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>Lorem Ipsum is not simply</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Food & Drinks</a></p>
                                    <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)" class="text-dark fw-bold">By Envato</a></p>
                                    <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                    <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BLOG -->

        <!-- CONTACT FORM START-->
        <section class="section " id="contact">
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
        </section> 
        <!-- CONTACT FORM END-->

        <!-- START FOOTER -->
        <section class="bg-light">
            <div class="container">
                <div class="row pt-4 pb-4">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="float-start mt-2 mb-2">
                                <p class="copy-rights text-muted mb-0"><script>document.write(new Date().getFullYear())</script> &copy; Perosnal Portfolio Design by 
                                    <a class="text-muted" href="http://shamim.intels.co/" target="_blank">
                                        Shamim Apon
                                    </a>
                                </p>
                            </div>
                            <div class="float-end mt-2 mb-2">
                                <ul class="list-inline fot_social mb-0">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/nazmulju41" target="_blank" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" target="_blank"  class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nazmulju41" target="_blank" class="social-icon text-muted"><i class="mdi mdi-linkedin" ></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" target="_blank" class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer -->
        <!-- End All Cards -->

        <!-- BACK TO TOP -->   
        <a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>

        <!-- JAVASCRIPTS -->
        <script src="{{ asset ('Frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset ('Frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset ('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--EASING JS-->
        <script src="{{asset ('Frontend/assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{asset ('Frontend/assets/js/scrollspy.min.js') }}"></script>
        <!-- TYPED -->
        <script src="{{asset ('Frontend/assets/js/typed.js') }}"></script>         
        <!-- MFP JS -->
        <script src="{{asset ('Frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!--PORTFOLIO FILTER JS-->
        <script src="{{asset ('Frontend/assets/js/isotope.js') }}"></script>
        <!-- CONTACT JS -->
        <script src="{{asset ('Frontend/assets/js/contact.js') }}"></script>
        <!--CUSTOM JS-->
        <script src="{{asset ('Frontend/assets/js/custom.js') }}"></script>
        <script>
            $(".element").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
        </script>
    </body>


</html>