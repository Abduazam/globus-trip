@extends('layouts.frontend')

@section('content')

    <main id="content" class="site-main">
        <section class="booking-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(/front/assets/images/img7.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">Booking</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <div class="booking-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 right-sidebar">
                            <!-- step one form html start -->
                            <div class="booking-form-wrap">
                                <form method="POST" action="{{ url('/sending') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="booking-content">
                                        <div class="form-title">
                                            <span>1</span>
                                            <h3>Your Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="firstname">First name*</label>
                                                    <input type="text" id="firstname" class="form-control" name="firstname">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lastname">Last name*</label>
                                                    <input type="text" id="lastname" class="form-control" name="lastname">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone*</label>
                                                    <input type="text" id="phone" class="form-control" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="captcha">Captcha</label>
                                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                                                    <div class="captcha pt-2">
                                                        <span>{!! captcha_img() !!}</span>
                                                        {{--                                                        <button type="button" class="btn btn-success refresh-captcha"></button>--}}
                                                    </div>
                                                    @error('captcha')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <button type="submit" class="round-btn">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- step one form html end -->
                        </div>
                        <div class="col-lg-4">
                            <div class="widget-bg widget-support-wrap">
                                <div class="icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="support-content">
                                    <h5>HELP AND SUPPORT</h5>
                                    <a href="telto:12345678" class="phone">+55 123 987 00</a>
                                    <small>Monday to Friday 9.00am - 7.30pm</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <img src="/front/assets/images/img21.jpg" alt="">
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
