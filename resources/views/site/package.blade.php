@extends('layouts.frontend')

@section('content')

    <main id="content" class="site-main">
        <section class="package-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(/front/assets/images/img7.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">Package Deatil</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***career section html start form here*** -->
            <div class="inner-package-detail-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 primary right-sidebar">
                            <div class="single-packge-wrap">
                                <div class="single-package-head d-flex align-items-center">
                                    <div class="package-title">
                                        <h2>{{ $package->title }}</h2>
                                        <div class="rating-start-wrap">
                                            <div class="rating-start">
                                                <span style="width: 100%"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-price">
                                        <h6 class="price-list">
                                            <span>${{ $package->price }}</span>
                                            / per person
                                        </h6>
                                    </div>
                                </div>
                                <div class="package-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            {{ $package->time }}
                                        </li>
                                        <li>
                                            <i class="fas fa-user-friends"></i>
                                            pax: {{ $package->people_count }}
                                        </li>
                                        <li>
                                            <i class="fas fa-swimmer"></i>
                                            Category : {{ $package->category }}
                                        </li>

                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $package->destination }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <figure class="single-package-image">
                                            <img src="{{ asset('/images/' . $package->image) }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="package-content-detail">
                                            <article class="package-overview">
                                                <h3>OVERVIEW :</h3>
                                                <p>{!! $package->description !!}</p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***career section html start form here*** -->
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
