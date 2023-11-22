<div>
    @extends('layouts.main')
    @section('header')
        <!-- Main Header / Header Style Four -->
        <header class="main-header header-style-four">

            <!-- Header Lower -->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center">

                        <div class="logo-box d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                        </div>
                        <div class="nav-outer clearfix">

                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="/">Home</a></li>
                                        <li class="active"><a href="/about">About</a></li>
                                        <li><a href="/contact">Contact us</a></li>
                                    </ul>

                                </div>

                            </nav>
                            <!-- Main Menu End-->

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

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/" title=""><img src="{{ asset('assets/images/logo-small.png') }}" alt="" title=""></a>
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
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/mobile-logo.png')}}" alt="" title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
    @endsection
    @section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h2>Shop Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="#">Home</a></li>
				<li>Pages</li>
				<li>Detail Product</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Shop Detail Section -->
	<section class="shop-detail-section">
		<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box">
				<div class="row clearfix">
					<!-- Gallery Column -->
					<div class="gallery-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="carousel-outer">
                                <!-- Swiper -->
                                <div class="swiper-container content-carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{ storageRoute($product->cover) }}" class="lightbox-image"><img src="{{ storageRoute($product->cover) }}" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{ storageRoute($product->cover) }}" class="lightbox-image"><img src="{{ storageRoute($product->cover) }}" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{ storageRoute($product->cover) }}" class="lightbox-image"><img src="{{ storageRoute($product->cover) }}" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{ storageRoute($product->cover) }}" class="lightbox-image"><img src="{{ storageRoute($product->cover) }}" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{ storageRoute($product->cover) }}" class="lightbox-image"><img src="{{ storageRoute($product->cover) }}" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-container thumbs-carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="{{ storageRoute($product->cover) }}" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>{{ $product->name }}</h3>
							<!-- Rating -->
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<!-- Price -->
							<div class="price">{{ rupiah($product->price) }} <span>{{ rupiahx2($product->price) }}</span> <i>-50%</i></div>
							<div class="text">{!! substr($product->description,0,300) !!}</div>

							<!-- Categories -->
							<div class="categories"><span>Categories :</span> {{ formatCategories($categories) }}</div>

							<!-- Tags -->
							<div class="categories"><span>Tags :</span> {{ formatTags($tags) }}</div>

							<!-- Social Box -->
							<ul class="social-box">
								<li class="share">Share:</li>
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
							</ul>

							<div class="d-flex align-items-center flex-wrap">

								<!-- Button Box -->
								<div class="button-box">
									<a href="https://wa.me/6282259780233/?text=Halo,%20saya%20tertarik%20untuk%20membeli%20product%20%20mabel%20Anda" class="theme-btn btn-style-one">
										Checkout
									</a>
								</div>



							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Upper Box -->

			<!-- Lower Box -->
			<div class="lower-box">

				<!-- Product Info Tabs -->
				<div class="product-info-tabs">
					<!-- Product Tabs -->
					<div class="prod-tabs tabs-box">

						<!-- Tab Btns -->
						<ul class="tab-btns tab-buttons clearfix">
							<li data-tab="#prod-details" class="tab-btn active-btn">Product Details</li>
						</ul>

						<!-- Tabs Container -->
						<div class="tabs-content">

							<!-- Tab / Active Tab -->
							<div class="tab active-tab" id="prod-details">
								<div class="content">
									{!! $product->description !!}
								</div>
							</div>



						</div>
					</div>

				</div>
				<!--End Product Info Tabs-->

			</div>
			<!-- End Lower Box -->

		</div>
	</section>

	<!-- End Shop Page Section -->

    <!-- Products Section Six -->
    <section class="products-section-six">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h4><span>Populer</span> Products For You !</h4>
            </div>
            <div class="row clearfix">
                @foreach ($products as $product)
                    <!-- Shop Item Two -->
                    <div class="shop-item-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('detail', $product->id) }}"><img
                                        src="{{ storageRoute($product->cover) }}" alt=""
                                        style="height: 300px" /></a>
                                <div class="options-box">
                                    <ul class="option-list">
                                        <li><a class="flaticon-resize" href="{{ route('detail', $product->id) }}"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a></h6>
                                <div class="lower-box">
                                    <div class="price"><span>{{ rupiahx2($product->price) }}</span>
                                        {{ rupiah($product->price) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    @endsection
</div>
