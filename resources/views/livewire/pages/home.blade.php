<div>
    @extends('layouts.main')
    @section('header')
        <!-- Main Header / Header Style Three -->
        <header class="main-header header-style-three">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Logo Box -->
                        <div class="logo-box d-flex align-items-center">
                            <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </div>
                            <!-- Logo -->
                        <div class="logo"><a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt=""
                                        title=""></a></div>
                        </div>

                        <!-- Search Box -->
                        <div class="search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <select name="currency" class="custom-select-box">
                                        <option>Search For Product</option>
                                        <input type="search" name="search-field" value=""
                                            placeholder="Search Product" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Options Box -->
                        <div class="options-box d-flex align-items-center">

                            <!-- Search Box -->
                            <div class="search-box-outer">
                                <div class="search-box-btn"><span class="flaticon-search-1"></span></div>
                            </div>

                            <!-- User Box -->
                            <a class="user-box flaticon-user-3" href="#"></a>

                            <!-- Like Box -->
                            <div class="like-box">
                                <a class="user-box flaticon-heart" href="#"></a>
                                <span class="total-like">0</span>
                            </div>

                            <!-- Cart Box -->
                            <div class="cart-box-two">
                                <a class="flaticon-shopping-bag" href="#"></a>
                                <span class="total-like">0</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Select Categories -->
                        <div class="select-categories">
                            <div class="category"><span class="icon flaticon-menu-3"></span> Select catagories
                                <span class="arrow flaticon-down-arrow"></span>
                            </div>
                            <ul class="categories-list">
                                <li class="active"><a href="#"><span class="icon"><img
                                                src="{{ asset('assets/images/icons/menu-icon-1.png') }}" alt="" /></span>court
                                        cupboard</a></li>

                                @for ($i = 0; $i < 8; $i++)
                                    <li><a href="#"><span class="icon"><img
                                        src="{{ asset('assets/images/icons/menu-icon-3.png') }}"
                                        alt="" /></span>platform rocker</a></li>
                                @endfor

                            </ul>
                        </div>

                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact us</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer Box -->
                        <div class="outer-box d-flex justify-content-between align-items-center">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>

                            <div class="language dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="flag"></span>Indonesia
                                    &nbsp;<span class="fa fa-angle-down"></span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <li><a href="#">Indonesia</a></li>
                                </div>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        </div>
                        <!-- End Outer Box -->

                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/" title=""><img src="{{ asset('assets/images/logo-small.png') }}" alt=""
                                    title=""></a>
                        </div>

                        <!-- Right Col -->
                        <div class="right-box">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ asset('assets/images/mobile-logo.png') }}" alt=""
                                title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value=""
                                    placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
    @endsection
    @section('content')
          <!-- Main Section Three -->
          <section class="main-slider-three">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="main-slider-carousel owl-carousel owl-theme">

                        <!-- Slide One -->
                        <div class="slide">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="vector-icon"
                                            style="background-image: {{ url('asset/images/main-slider/vector-5.png') }}">
                                        </div>
                                        <div class="title">100% UMKM INDONESIA</div>
                                        <h1>Ara Mabel</h1>
                                        <div class="text">Moto UMKM</div>
                                        <!-- Button Box -->
                                        <div class="button-box">
                                            <a href="#" class="theme-btn btn-style-one">
                                                Jelajahi <span class="icon flaticon-right-arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="circle-box"></div>
                                        <div class="vector-icon-two"
                                            style="background-image: url(assest/images/icons/pattern-1.png)"></div>
                                        <div class="vector-icon-three"
                                            style="background-image: url(assets/images/main-slider/vector-6.png)">
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/background/bgheader.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Slide One -->

                        <!-- Slide Two -->
                        <div class="slide">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="vector-icon"
                                            style="background-image: url(images/main-slider/vector-5.png)"></div>
                                        <div class="title">100% UMKM INDONESIA</div>
                                        <h1>Ara Mabel</h1>
                                        <div class="text">Moto UMKM</div>
                                        <!-- Button Box -->
                                        <div class="button-box">
                                            <a href="#" class="theme-btn btn-style-one">
                                                Jelajahi <span class="icon flaticon-right-arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="circle-box"></div>
                                        <div class="vector-icon-two"
                                            style="background-image: url(assets/images/icons/pattern-1.png)"></div>
                                        <div class="vector-icon-three"
                                            style="background-image: url(assets/images/main-slider/vector-6.png)">
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/background/bgheader.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Slide Two -->

                        <!-- Slide Three -->
                        <div class="slide">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="vector-icon"
                                            style="background-image: url(images/main-slider/vector-5.png)"></div>
                                        <div class="title">100% UMKM INDONESIA</div>
                                        <h1>Ara Mabel</h1>
                                        <div class="text">Moto UMKM</div>
                                        <!-- Button Box -->
                                        <div class="button-box">
                                            <a href="#" class="theme-btn btn-style-one">
                                                Jelajahi <span class="icon flaticon-right-arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="circle-box"></div>
                                        <div class="vector-icon-two"
                                            style="background-image: url(assets/images/icons/pattern-1.png)"></div>
                                        <div class="vector-icon-three"
                                            style="background-image: url(assest/images/main-slider/vector-6.png)">
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/background/bgheader.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Slide Three -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Section Three -->




        <!-- Products Section Three -->
        <section class="products-section-three">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h4><span>Products </span> your choich !</h4>
                </div>

                <!-- MixitUp Galery -->
                <div class="mixitup-gallery">

                    <div class="filter-list row clearfix">

                        <!-- Shop Item Three -->
                        @for ($i = 0; $i < 6; $i++)
                            <div class="shop-item-three mix music sports col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="shop-detail.html"><img
                                                src="{{ asset('assets/images/resource/products/29.png') }}"
                                                alt="" /></a>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h6><a href="shop-detail.html">masks 95 percent 0.3-μm particles</a></h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="price"><span>$23.52</span> $62.00</div>
                                        </div>

                                        <div class="select-amount clearfix">
                                            <a href="#" class="select-box btn btn-info">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor



                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Section Three -->

        <!-- Products Section Six -->
        <section class="products-section-six">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h4><span>Product </span> For You !</h4>
                </div>
                <div class="row clearfix">

                    @for ($i = 0; $i < 12; $i++)
                    <!-- Shop Item Two -->
                    <div class="shop-item-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="shop-detail.html"><img
                                        src="{{ asset('assets/images/resource/products/25.png') }}"
                                        alt="" /></a>
                                <div class="options-box">
                                    <ul class="option-list">
                                        <li><a class="flaticon-resize" href="shop-detail.html"></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h6><a href="shop-detail.html">masks 95 percent 0.3-μm <br> particles</a></h6>
                                <div class="lower-box">
                                    <div class="price"><span>$239.52</span> $362.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>

            </div>
        </section>
        <!-- End Products Section Six -->

        <!-- Testimonial Section Three -->
        <section class="testimonial-section-three">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url(images/background/pattern-4.png)">
                    </div>
                    <div class="row clearfix">
                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="arrow-layer" style="background-image: url(images/icons/arrow-2.png)">
                                </div>
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/testimonial.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Column -->
                        <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <!-- Slide -->
                                    <div class="slide">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">Furniture dari toko ini benar-benar mempercantik rumah saya. Desainnya modern, dan materialnya tahan lama. Pelayanannya juga sangat baik, responsif, dan profesional.</div>
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="slide">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">Pengalaman berbelanja furniture di sini luar biasa. Produknya unik, harga terjangkau, dan pelayanannya sangat ramah. Sangat merekomendasikan kepada semua yang mencari perabotan berkualitas.</div>
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section Three -->
    @endsection

</div>
