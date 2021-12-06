<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$settings->siteName}} - @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

<header class="header">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="{{route('home')}}"><img src="{{$settings->siteLogo}}" width="200" alt="Site Logo"></a>
                </div>
            </div><!-- Header Logo End -->

            <!-- Offcanvas Toggle Start -->
            <div class="col-auto d-lg-none d-flex align-items-center">
                <button class="offcanvas-toggle">
                    <span></span>
                </button>
            </div>
            <!-- Offcanvas Toggle End -->

            <!-- Header Links Start -->
            <div class="header-links col-auto order-lg-3">
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Giriş</a>
                <span>veya</span>
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Kayıt Ol</a>
            </div><!-- Header Links End -->

            <!-- Header Menu Start -->
            <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                <ul>
                    <li class="has-children"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="job-list.html">Jobs</a>
                        <ul class="sub-menu">
                            <li><a href="job-list.html">Job List</a></li>
                            <li><a href="job-single.html">Job Single</a></li>
                        </ul>
                    </li>
                    <li><a href="company-list.html">Company</a>
                        <ul class="sub-menu">
                            <li><a href="company-list.html">Company List</a></li>
                            <li><a href="company-single.html">Company Single</a></li>
                            <li><a href="create-job.html">Create Job</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="faq.html">FAQ'S</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
            <!-- Header Menu End -->

        </div>

    </div>
</header>


<!--Offcanvas Section Start-->
<div id="offcanvas" class="offcanvas-section">
    <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
    <div class="offcanvas-wrap">
        <div class="inner">

            <!-- Offcanvas user Start -->
            <div class="offcanvas-user">
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                <span>or</span>
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
            </div>
            <!-- Offcanvas user End -->

            <!-- Offcanvas Menu Start -->
            <div class="offcanvas-menu">
                <nav>
                    <ul>
                        <li class="has-children"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="job-list.html">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="job-list.html">Job List</a></li>
                                <li><a href="job-single.html">Job Single</a></li>
                            </ul>
                        </li>
                        <li><a href="company-list.html">Company</a>
                            <ul class="sub-menu">
                                <li><a href="company-list.html">Company List</a></li>
                                <li><a href="company-single.html">Company Single</a></li>
                                <li><a href="create-job.html">Create Job</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Offcanvas Menu End -->

        </div>
    </div>
</div>
<!--Offcanvas Section End-->
<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>


<div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <ul class="loginSignupNav nav">
                    <li><a class="nav-link active" data-toggle="tab" href="#login">Login</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#signup">Sign up</a></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login">
                        <form action="{{route('auth.login')}}" method="POST">
                            @csrf
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input name="email" type="email" placeholder="Email"></div>
                                <div class="col-12 mb-3"><input name="password" type="password" placeholder="Şifre"></div>
                                <div class="col-12 mb-3">
                                    <div class="row justify-content-between mb-n2">
                                        <div class="col-auto mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                <label class="custom-control-label" name="rememberMe" for="remember-me">Beni hatırla</label>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2"><a href="#">Şifreni mi unuttun?</a></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Giriş"></div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form action="{{route('auth.register')}}" method="POST">
                            @csrf
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input name="name" type="text" placeholder="İsim"></div>
                                <div class="col-12 mb-3"><input name="surname" type="text" placeholder="Soyisim"></div>
                                <div class="col-12 mb-3"><input name="email" type="email" placeholder="E-Mail"></div>
                                <div class="col-12 mb-3"><input name="password" type="password" placeholder="Şifre"></div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Kayıt Ol"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<!-- Footer Top Section Start -->
<div class="footer-top-section section">
    <div class="container">
        <div class="footer-widget-wrap row">

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <div class="footer-widget-about">
                        <img src="{{$settings->siteLogo}}" width="200" alt="">
                        <p>{{$settings->shortAboutUs}}</p>

                        <ul class="footer-socail">
                            <li><a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$settings->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$settings->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Quick links</h6>
                    <div class="footer-widget-link">
                        <ul>
                            <li><a href="#">Post New Job</a></li>
                            <li><a href="#">Jobs List</a></li>
                            <li><a href="#">Candidate List</a></li>
                            <li><a href="#">Employer List</a></li>
                            <li><a href="#">Browse Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Tranding Jobs</h6>
                    <div class="footer-widget-link">
                        <ul>
                            <li><a href="#">Designer</a></li>
                            <li><a href="#">UI & UX Expert</a></li>
                            <li><a href="#">Develpoer</a></li>
                            <li><a href="#">iOS developer</a></li>
                            <li><a href="#">Front-End developer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footer-widget">
                    <h6 class="title">Newsletter</h6>
                    <div class="footer-widget-newsletter">
                        <p>Subscribe to Lawson to get all latest Job, Resume, Company Listing & Blog post to stay update.</p>
                        <form id="mc-form" class="mc-form">
                            <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                            <button id="mc-submit" class="btn"><i class="fa fa-envelope-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

        </div>
    </div>
</div>
<!-- Footer Top Section End -->

<!-- Footer Bottom Section Start -->
<div class="footer-bottom-section section">
    <div class="container">
        <div class="row">

            <!-- Footer Copyright Start -->
            <div class="col-12">
                <p class="footer-copyright text-center">Copyright &copy; 2022 <a href="https://rutin.com/">Rutin</a> Tüm hakları saklıdır. Verilen ilanlardan Rutin sorumlu değildir.</p>
            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
</div>
<!-- Footer Bottom Section End -->

<!-- JS
============================================ -->

<!-- Google Map API JS -->
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

<!-- Vendors JS -->
<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Plugins JS -->
<script src="/assets/js/plugins/slick.min.js"></script>
<script src="/assets/js/plugins/jquery.waypoints.min.js"></script>
<script src="/assets/js/plugins/jquery.counterup.min.js"></script>
<script src="/assets/js/plugins/jquery.parallax.js"></script>
<script src="/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="/assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="/assets/js/plugins/jquery.scrollUp.min.js"></script>

<!-- Main Activation JS -->
<script src="/assets/js/main.js"></script>

</body>

</html>

@include('sweetalert::alert')
