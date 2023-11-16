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
						<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
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
									<li class="dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											<li><a href="index-3.html">Homepage Three</a></li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li class="dropdown"><a href="#">Shop</a>
										<ul>
											<li><a href="shop.html">Our Products</a></li>
											<li><a href="shop-detail.html">Product Single</a></li>
											<li><a href="cart.html">Shoping Cart</a></li>
											<li><a href="checkout.html">CheckOut</a></li>
											<li><a href="register.html">Register</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-detail.html">Blog Single</a></li>
											<li><a href="not-found.html">Not Found</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact us</a></li>
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
						<a class="user-box flaticon-user-3" href="contact.html"></a>

						<!-- Like Box -->
						<div class="like-box">
							<a class="user-box flaticon-heart" href="contact.html"></a>
							<span class="total-like">0</span>
						</div>

						<!-- Cart Box -->
						<div class="cart-box-two">
							<a class="flaticon-shopping-bag" href="shop.html"></a>
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
						<a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="images/mobile-logo.png" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
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

    </header>
    <!-- End Main Header -->
    @endsection
    @section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h2>Shop Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Pages</li>
				<li>Shop Details</li>
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
                                            <figure class="image"><a href="images/resource/products/35.png" class="lightbox-image"><img src="images/resource/products/35.png" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="images/resource/products/35.png" class="lightbox-image"><img src="images/resource/products/35.png" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="images/resource/products/35.png" class="lightbox-image"><img src="images/resource/products/35.png" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="images/resource/products/35.png" class="lightbox-image"><img src="images/resource/products/35.png" alt=""></a></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="images/resource/products/35.png" class="lightbox-image"><img src="images/resource/products/35.png" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-container thumbs-carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="images/resource/products/36.png" alt=""></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="images/resource/products/37.png" alt=""></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="images/resource/products/38.png" alt=""></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="images/resource/products/39.png" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>Accesories Lather Shoes</h3>
							<!-- Rating -->
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="light fa fa-star"></span>
								<i>(4 customer review)</i>
							</div>
							<!-- Price -->
							<div class="price">$16.00 <span>$32.00</span> <i>-34%</i></div>
							<div class="text">Rorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
							<div class="d-flex flex-wrap">
								<!-- Model -->
								<div class="model">
									<span class="model-title">Model :</span>
								</div>
								<!-- Select Size -->
								<div class="select-size-box clearfix">
									<div class="select-box"><input type="radio" name="payment-group" id="radio-one" checked><label for="radio-one">tyk</label></div>
									<div class="select-box"><input type="radio" name="payment-group" id="radio-two"><label for="radio-two">ffd2</label></div>
									<div class="select-box"><input type="radio" name="payment-group" id="radio-three"><label for="radio-three">23tt</label></div>
									<div class="select-box"><input type="radio" name="payment-group" id="radio-four"><label for="radio-four">r454</label></div>
									<div class="select-box"><input type="radio" name="payment-group" id="radio-five"><label for="radio-five">45hy</label></div>
								</div>
							</div>

							<!-- Categories -->
							<div class="categories"><span>Categories :</span> All, Featured, Medical, Covid-19 Mask</div>

							<!-- Tags -->
							<div class="categories"><span>Tags :</span> Black, Brown, Red, Shoes, £0.00 - £150.00</div>

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
									<a href="shop.html" class="theme-btn btn-style-one">
										Add to cart
									</a>
								</div>

								<!-- Quantity Box -->
								<div class="quantity-box">
									<div class="item-quantity">
										<input class="qty-spinner" type="text" value="1" name="quantity">
									</div>
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
									<h3>Experience is over the world visit</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus</p>
									<h5>More Details</h5>
									<div class="row clearfix">
										<div class="col-lg-6 col-md-12 col-sm-12">
											<ul class="list-one">
												<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
												<li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
												<li>type here your detail one by one li more add</li>
												<li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
											</ul>
										</div>
										<div class="col-lg-6 col-md-12 col-sm-12">
											<ul class="list-two">
												<li>Lorem Ipsum generators on the tend to repeat.</li>
												<li>If you are going to use a passage.</li>
												<li>Lorem Ipsum generators on the tend to repeat.</li>
												<li>Lorem Ipsum generators on the tend to repeat.</li>
												<li>If you are going to use a passage.</li>
											</ul>
										</div>
									</div>
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
                <h4><span>Product </span> For You !</h4>
            </div>
            <div class="row clearfix">

                @for ($i = 0; $i < 4; $i++)
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
    @endsection
</div>
