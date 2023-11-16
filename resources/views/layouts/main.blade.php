<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Ara Mabel Furniture</title>
        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
            rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>

    <body>

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="loader-wrap">
                <div class="preloader">
                    <div class="preloader-close">x</div>
                    <div id="handle-preloader" class="handle-preloader">
                        <div class="animation-preloader">
                            <div class="spinner"></div>
                            <div class="txt-loading">
                                <span data-text-preloader="A" class="letters-loading">
                                    A
                                </span>
                                <span data-text-preloader="R" class="letters-loading">
                                    R
                                </span>
                                <span data-text-preloader="A" class="letters-loading">
                                    A
                                </span>
                                <span data-text-preloader="-" class="letters-loading">
                                    -
                                </span>
                                <span data-text-preloader="M" class="letters-loading">
                                    M
                                </span>
                                <span data-text-preloader="A" class="letters-loading">
                                    A
                                </span>
                                <span data-text-preloader="B" class="letters-loading">
                                    B
                                </span>
                                <span data-text-preloader="E" class="letters-loading">
                                    E
                                </span>
                                <span data-text-preloader="L" class="letters-loading">
                                    L
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preloader End -->

            @yield('header')


            <!-- Sidebar Cart Item -->
            <div class="xs-sidebar-group info-group">
                <div class="xs-overlay xs-bg-black"></div>
                <div class="xs-sidebar-widget">
                    <div class="sidebar-widget-container">
                        <div class="widget-heading">
                            <a href="#" class="close-side-widget">
                                X
                            </a>
                        </div>
                        <div class="sidebar-textwidget">

                            <!-- Sidebar Info Content -->
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo.png" alt=""
                                                title=""></a>
                                    </div>
                                    <div class="content-box">

                                        <h6>Contact info</h6>
                                        <!-- List Style One -->
                                        <ul class="list-style-one">
                                            <li>
                                                <span class="icon flaticon-maps-and-flags"></span>
                                                <strong>Our office</strong>
                                                A-1, Envanto Headquarters, <br> Melbourne, Australia.
                                            </li>
                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <strong>Phone</strong>
                                                <a href="tel:+00-999-999-9999">+(00) 999 999 9999</a><br>
                                                <a href="tel:+000-000-0000">000 000 0000</a>
                                            </li>
                                            <li>
                                                <span class="icon flaticon-mail"></span>
                                                <strong>Email</strong>
                                                <a href="mailto:contact@bloxic.com">contact@Bloxic.com</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

          <!-- Main Footer / Style Three -->
          <footer class="main-footer">
            <div class="auto-container">


                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <div class="copyright text-center"><span>&copy; 2023</span> UMKM Ara Mabel Jambi
                        </div>
                        <div class="cards"><img src="images/icons/cards.png" alt="" /></div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here"
                    required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
    <!-- End Scroll To Top -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    {{-- <!--[if lt IE 9]><script src="{{ asset('assets/js/respond.js')}}"></script><![endif]--> --}}

</body>

</html>
