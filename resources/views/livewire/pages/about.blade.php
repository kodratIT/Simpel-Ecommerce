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
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="#">Home</a></li>
				<li>Pages</li>
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{ asset('assets/images/resource/owner.jpg') }}" alt=""/>

							<!-- Email Box -->
							{{-- <div class="years-box">
								<span>20+</span> Years Of Experience
							</div>
							<!-- End Email Box -->

							<!-- Experiance Box -->
							<div class="experiance">
								<div class="counter"><span class="odometer" data-count="25"></span> +</div>
								<span class="years">years of <br> experince</span>
							</div> --}}
						</div>
					</div>
				</div>

				<!-- content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title">About Our Store</div>
						<h2>Ara Mabel<br> Your Specific Area</h2>
						<div class="text">We build and activate brands through cultural insight, str <br> vision, and the power of emotion across every</div>
						<ul class="options">
							<li><span class="icon flaticon-armchair"></span>Furniture Design</li>
							<li><span class="icon flaticon-livingroom"></span>Home Decoration</li>
						</ul>
						<ul class="check-list">
							<li>Mix and match colors, sizes, and designs</li>
							<li>Top quality prints using the latest technology</li>
						</ul>
						{{-- <div class="designation"><span>Foqrul Saheb</span> Senior Artist Developer</div> --}}
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section -->

    <!-- Sale Section Three -->
	<section class="sale-section-three">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<div class="title">100% organic Food</div>
				<h2>Produce Stuning Printing <br> For Your Business</h2>
			</div>

			<!-- Sale Info Tabs -->
			<div class="sale-info-tabs">
				<!-- Sale Tabs -->
				<div class="sale-tabs tabs-box">

					<!-- Tab Btns -->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-about" class="tab-btn active-btn">About us</li>
					</ul>

					<!-- Tabs Container -->
					<div class="tabs-content">

						<!-- Tab / Active Tab -->
						<div class="tab active-tab" id="prod-about">
                            <div class="content">
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, laudantium. Cupiditate nesciunt voluptatibus libero autem qui nostrum esse consequuntur vitae quia? Architecto exercitationem quam placeat, eum nesciunt in? Laudantium, nam!
                                </p>
								<h5>World best education site - (Computer engeenering)</h5>
								<div class="check-list-outer">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="check-list">
												<li>Preaching Worship An Online Family</li>
												<li>Preaching Worship An Online Family</li>
											</ul>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="check-list">
												<li>Preaching Worship An Online Family</li>
												<li>Preaching Worship An Online Family</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End Sale Section Three -->
   @endsection
</div>
