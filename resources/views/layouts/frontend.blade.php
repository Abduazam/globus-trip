<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/front/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- fancybox box css -->
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/front/assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/front/style.css">
    <title>Globus Trip</title>
</head>
<body class="home">

<div id="siteLoader" class="site-loader">
    <div class="preloader-content">
        <img src="/front/assets/images/loader1.gif" alt="">
    </div>
</div>

<div id="page" class="page">
    <!-- site header html start  -->
    <header id="masthead" class="site-header">
        <!-- header html start -->
        <div class="top-header">
            <div class="container">
                <div class="top-header-inner">
                    <div class="header-contact text-left">
                        <a href="tel:+01977259912">
                            <i aria-hidden="true" class="icon icon-phone-call2"></i>
                            <div class="header-contact-details">
                                <span class="contact-label">Bog'lanish uchun :</span>
                                <h5 class="header-contact-no">+998 (97) 123-45-67</h5>
                            </div>
                        </a>
                    </div>
                    <div class="site-logo text-center">
                        <h1 class="site-title">
                            <a href="{{ url('/') }}">
                                <img src="/front/assets/images/site-logo.png" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-header-inner d-flex justify-content-between align-items-center">
                    <div class="header-social social-icon">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="navigation-container d-none d-lg-block">
                        <nav id="navigation" class="navigation">
                            <ul>
                                <li class="{{ request()->is('/') ? 'menu-active' : '' }}">
                                    <a href="{{ url('/') }}">Bosh sahifa</a>
                                </li>
                                <li class="{{ request()->is('about*') ? 'menu-active' : '' }}">
                                    <a href="{{ url('/about') }}">Biz haqimizda</a>
                                </li>
                                <li class="class="{{ request()->is('packages*') ? 'menu-active' : '' }}">
                                    <a href="{{ url('/packages') }}">Yo'nalishlar</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn">
                        <a href="{{ url('/contact') }}" class="round-btn">Bog'lanish</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-container"></div>
    </header>
    <!-- site header html end  -->

    @yield('content')
</div>

<!-- JavaScript -->
<script src="/front/assets/vendors/jquery/jquery.js"></script>
<script src="/front/assets/vendors/waypoint/waypoints.js"></script>
<script src="/front/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/front/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="/front/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
<script src="/front/assets/vendors/counterup/jquery.counterup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="/front/assets/vendors/masonry/masonry.pkgd.min.js"></script>
<script src="/front/assets/vendors/slick/slick.min.js"></script>
<script src="/front/assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="/front/assets/vendors/slick-nav/jquery.slicknav.js"></script>
<script src="/front/assets/js/custom.min.js"></script>
</body>
</html>
