<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>web publica</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- All CSS File here -->
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<!-- preloader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- preloader -->
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
@section('header')
    <!-- Header Start -->
    <header id="home" class="header-area header-transparrent">
        <div class="header-top h2-top-padding pos-rel header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <!-- logo -->
                        <div class="logo-area">
                            <a href="index.html" class="logo"><img src="img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-6">
                        <div class="header-right">
                            <div class="header-btn f-right">
                                <a href="/contact" class="btn btn-border h2-btn-orrange-bg">Sign up</a>
                            </div>
                            <!-- main menu -->
                            <div class="main-menu h2-main-menu f-right">
                                <nav id="mobile-menu">
                                    <ul class="list-inline">
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->
@show

@yield('main')

@section('footer')
    <!-- Footer start -->
    <footer>
        <div class="footer-area theme-bg pt-130 pb-80" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-address">
                                <address>394 University Ave.
                                    Paolo Alto, CA 957236</address>
                            </div>
                            <div class="footer-cta">
                                <ul>
                                    <li><a href="#">info@iSaascompany.com</a></li>
                                    <li><a href="#">(+566)-699-9221</a></li>
                                </ul>
                            </div>
                            <div class="footer-social-info">
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 mb-30">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h5>Company</h5>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Price</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 mb-30 d-none d-md-block">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h5>Support</h5>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-newsletter">
                                <h3>Subscribe our newsletter</h3>
                                <form action="">
                                    <input type="text" placeholder="Email Address">
                                    <i class="flaticon-send"></i>
                                </form>
                            </div>
                            <div class="footer-copyright">
                                <a href="index.html" class="footer-logo">Xilo</a>
                                <p>© 2018_FabiDesign_Lab</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->
@show

<!-- All JS File here -->
<script src="js/all.js"></script>

</body>
</html>
