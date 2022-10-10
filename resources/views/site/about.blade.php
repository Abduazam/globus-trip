@extends('layouts.frontend')

@section('content')

    <main id="content" class="site-main">
        <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***about section html start form here*** -->
            <div class="inner-about-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="about-content">
                                <figure class="about-image">
                                    <img src="assets/images/img27.jpg" alt="">
                                    <div class="about-image-content">
                                        <h3>WE ARE BEST FOR TOURS & TRAVEL SINCE 1985 !</h3>
                                    </div>
                                </figure>
                                <h2>HOW WE ARE BEST FOR TRAVEL !</h2>
                                <p>Dictumst voluptas qui placeat omnis repellendus, est assumenda dolores facilisis, nostra, inceptos. Ullam laudantium deserunt duis platea. Fermentum diam, perspiciatis cupidatat justo quam voluptate, feugiat, quaerat. Delectus aute scelerisque blanditiis venenatis aperiam rem. Tempore porttitor orci eligendi velit vel scelerisque minus scelerisque? Dis! Aenean! Deleniti esse aperiam adipiscing, sapiente? </p>
                                <p>Ratione conubia incididunt nullam! Sodales, impedit, molestias consectetuer itaque magni ut neque, lobortis expedita corporis voluptatem natus praesent mollis quidem auctor curae, mattis laboris diamlorem iure nullam esse? Pariatur primis.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <div class="box-icon">
                                    <i aria-hidden="true" class="fas fa-umbrella-beach"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h3>AFFORDABLE TOURS</h3>
                                    <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="box-icon">
                                    <i aria-hidden="true" class="fas fa-user-tag"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h3>BEST TOUR GUIDES</h3>
                                    <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="box-icon">
                                    <i aria-hidden="true" class="fas fa-headset"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h3>AFFORDABLE TOURS</h3>
                                    <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***about section html start form here*** -->
        </section>
    </main>

    <a id="backTotop" href="#" class="to-top-icon">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- ***custom search field html*** -->
    <div class="header-search-form">
        <div class="container">
            <div class="header-search-container">
                <form class="search-form" role="search" method="get" >
                    <input type="text" name="s" placeholder="Enter your text...">
                </form>
                <a href="#" class="search-close">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- ***custom search field html*** -->
    <!-- ***custom top bar offcanvas html*** -->
    <div id="offCanvas" class="offcanvas-container">
        <div class="offcanvas-inner">
            <div class="offcanvas-sidebar">
                <aside class="widget author_widget">
                    <h3 class="widget-title">OUR PROPRIETOR</h3>
                    <div class="widget-content text-center">
                        <div class="profile">
                            <figure class="avatar">
                                <img src="assets/images/img21.jpg" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name-title">
                                    <h4> James Watson</h4>
                                </div>
                                <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                            </div>
                            <div class="socialgroup">
                                <ul>
                                    <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li>
                                    <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li>
                                    <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                    <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                                    <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget_text text-center">
                    <h3 class="widget-title">CONTACT US</h3>
                    <div class="textwidget widget-text">
                        <p>Feel free to contact and<br/> reach us !!</p>
                        <ul>
                            <li>
                                <a href="tel:+01988256203">
                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                    +01(988) 256 203
                                </a>
                            </li>
                            <li>
                                <a href="mailtop:info@domain.com">
                                    <i aria-hidden="true" class="icon icon-envelope1"></i>
                                    info@domain.com
                                </a>
                            </li>
                            <li>
                                <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                3146 Koontz, California
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <a href="#" class="offcanvas-close">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="overlay"></div>
    </div>
    <!-- ***custom top bar offcanvas html*** -->

@endsection
