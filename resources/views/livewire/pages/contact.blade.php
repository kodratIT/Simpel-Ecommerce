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
                            <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}"
                                        alt="" title=""></a></div>
                        </div>
                        <div class="nav-outer clearfix">

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
                            <a href="index.html" title=""><img src="{{ asset('assets/images/logo-small.png') }}" alt=""
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
                    <div class="nav-logo"><a href="/"><img src="{{ asset('assets/images/mobile-logo.png') }}" alt=""
                                title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
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
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Pages</li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
        <!-- Contact Page Section -->
    <div class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-email-1"></div>
								<div class="content">
									<strong>Mail address</strong>
									<a href="mailto:prinox@gmail.com">prinox@gmail.com</a><br>
									<a href="tel:+998757478492">+998757478492</a>
								</div>
							</div>
						</div>

						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-map"></div>
								<div class="content">
									<strong>Office address</strong>
									<div class="text">Digital Agency Network 2021 Eastbourne Terrace</div>
								</div>
							</div>
						</div>

						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-call"></div>
								<div class="content">
									<strong>Phone Number</strong>
									<a href="tel:+880-123-456-789">+880 123 456 789</a><br>
									<a href="tel:+9987574">+9987574</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Column -->
				<div class="map-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Map Outer-->
						<div class="map-outer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
	<!-- End Contact Page Section -->
    @endsection
</div>
