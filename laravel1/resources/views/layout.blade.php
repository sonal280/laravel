<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SoftLand Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SoftLand - v2.0.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Mobile Menu ======= -->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- ======= Header ======= -->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-lg-2">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">SoftLand</a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-lg-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
                            <li class="{{ Request::path() ==='/features' ? 'active' : '' }}"><a href="/features" class="nav-link">Features</a></li>
                            <li class="{{ Request::path() ==='/pricing' ? 'active' : '' }}"><a href="/pricing" class="nav-link">Pricing</a></li>

                            <li class="has-children">
                                <a href="blog.html" class="nav-link">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                                    <li><a href="blog-single.html" class="nav-link">Blog Sigle</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::path() === 'about' ? 'active' : '' }}"><a href="/about" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

                    <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>

            </div>
        </div>

    </header>
    @yield('content');
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>About SoftLand</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
                        dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
                    <p class="social">
                        <a href="#"><span class="icofont-twitter"></span></a>
                        <a href="#"><span class="icofont-facebook"></span></a>
                        <a href="#"><span class="icofont-dribbble"></span></a>
                        <a href="#"><span class="icofont-behance"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ml-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Services</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Todos</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Downloads</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Get from the App Store</a></li>
                                <li><a href="#">Get from the Play Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>