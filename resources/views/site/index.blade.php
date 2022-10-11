@extends('layouts.frontend')

@section('content')

    <main id="content" class="site-main">
        <!-- ***home banner html start form here*** -->
        <section class="home-banner-section home-banner-slider">
            <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(front/assets/images/banner-img1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="banner-title">JOURNEY TO EXPLORE WORLD</h2>
                                <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
                                <div class="banner-btn">
                                    <a href="{{ url('/about') }}" class="round-btn">LEARN MORE</a>
                                    <a href="{{ url('/booking') }}" class="outline-btn outline-btn-white">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(front/assets/images/img7.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="banner-title">BEAUTIFUL PLACE TO VISIT</h2>
                                <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
                                <div class="banner-btn">
                                    <a href="{{ url('/about') }}" class="round-btn">LEARN MORE</a>
                                    <a href="{{ url('/booking') }}" class="outline-btn outline-btn-white">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***home banner html end here*** -->
        <!-- ***Home destination html start from here*** -->
        <section class="home-destination">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">UNCOVER PLACE</h5>
                            <h2 class="section-title">POPULAR DESTINATION</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="destination-section">
                    <div class="row">
                        @foreach($packages as $package)
                            <div class="col-lg-4 col-md-6">
                                <article class="destination-item" style="background-image: url('/images/{{ $package->image }}');">
                                    <div class="destination-content">
                                        <div class="rating-start-wrap">
                                            <div class="rating-start">
                                                <span style="width: 100%"></span>
                                            </div>
                                        </div>
                                        <span class="cat-link">
                                        <a href="#">{{ $package->destination }}</a>
                                     </span>
                                        <h3>
                                            <a href="{{ url('/package/' . $package->id) }}">{{ $package->title }}</a>
                                        </h3>
                                        <p>{!! substr(strip_tags($package->description), 0, 40); !!}</p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home destination html end here*** -->
        <!-- ***Home package html start from here*** -->
        <section class="home-package">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">POPULAR PACKAGES</h5>
                            <h2 class="section-title">CHECKOUT OUR PACKAGES</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="package-section">
                    @foreach($randomPackages as $package)
                        <article class="package-item">
                            <figure class="package-image" style="background-image: url('/images/{{ $package->image }}');"></figure>
                            <div class="package-content">
                                <h3>
                                    <a href="{{ url('/package/' . $package->id) }}">
                                        {{ $package->title }}
                                    </a>
                                </h3>
                                <p>{!! substr(strip_tags($package->description), 0, 140) !!}</p>
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
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $package->destination }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-price">
                                <div class="review-area">
                                    <span class="review-text">({{ $package->views }} reviews)</span>
                                    <div class="rating-start-wrap d-inline-block">
                                        <div class="rating-start">
                                            <span style="width: 80%"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="price-list">
                                    <span>${{ $package->price }}</span>
                                    / per person
                                </h6>
                                <a href="{{ url('/booking') }}" class="outline-btn outline-btn-white">Book now</a>
                            </div>
                        </article>
                    @endforeach
                    <div class="section-btn-wrap text-center">
                        <a href="{{ url('/packages') }}" class="round-btn">VIEW ALL PACKAGES</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home package html end here*** -->
        <!-- ***Home callback html start from here*** -->
        <section class="home-callback bg-img-fullcallback" style="background-image: url(front/assets/images/img7.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="callback-content">
                            <div class="video-button">
                                <a  id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home callback html end here*** -->
        <!-- ***Home counter html start from here*** -->
        <div class="home-counter">
            <div class="container">
                <div class="counter-wrap">
                    <div class="counter-item">
                        <span class="counter-no">
                           <span class="counter">80</span>K+
                        </span>
                        <span class="counter-desc">
                           SATISFIED CUSTOMER
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                           <span class="counter">18</span>+
                        </span>
                        <span class="counter-desc">
                           ACTIVE MEMBERS
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                           <span class="counter">220</span>+
                        </span>
                        <span class="counter-desc">
                           TOUR DESTINATION
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                           <span class="counter">75</span>+
                        </span>
                        <span class="counter-desc">
                           TRAVEL GUIDES
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***Home counter html end here*** -->
        <!-- ***Home offer html start from here*** -->
        <section class="home-offer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">PHOTO GALLERY</h5>
                            <h2 class="section-title">PHOTO'S FROM TRAVELLERS</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <div class="gallery-container grid">
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="front/assets/images/img14.jpg" data-fancybox="gallery">
                                    <img src="front/assets/images/img14.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="front/assets/images/img11.jpg" data-fancybox="gallery">
                                    <img src="front/assets/images/img11.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="front/assets/images/img12.jpg" data-fancybox="gallery">
                                    <img src="front/assets/images/img12.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="front/assets/images/img13jpg" data-fancybox="gallery">
                                    <img src="front/assets/images/img13.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="front/assets/images/img10.jpg" data-fancybox="gallery">
                                    <img src="front/assets/images/img10.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home offer html end here*** -->

        <!-- ***Home testimonial html start from here*** -->
        <section class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h5 class="sub-title">CLIENT'S REVIEWS</h5>
                            <h2 class="section-title">TRAVELLER'S TESTIMONIAL</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-section testimonial-slider">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="front/assets/images/img18.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>WILLIAM WRIGHT</h5>
                                    <span>TRAVELLERS</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="front/assets/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>ALISON WHITE</h5>
                                    <span>TRAVELLERS</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="front/assets/images/img20.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>GEORGE SMITH</h5>
                                    <span>TRAVELLERS</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="front/assets/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>ALISON WHITE</h5>
                                    <span>TRAVELLERS</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home testimonial html end here*** -->
        <!-- ***Home callback html start from here*** -->
        <section class="home-callback bg-color-callback primary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="sub-title">CALL TO ACTION</h5>
                        <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                        <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="{{ url('/contact') }}" class="outline-btn outline-btn-white">Contact Us !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home callback html end here*** -->
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
                                <img src="front/assets/images/img21.jpg" alt="">
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
