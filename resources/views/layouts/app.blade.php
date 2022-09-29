<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Fansinc</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <!-- <link href="assets/img/favicon.png" rel="icon"> -->
        <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NewBiz - v4.7.0
        * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        <style>
            body{
                font-family: montserrat !important;
            }
            .back-to-top {
                background:#181d38;
            }
            .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #181d38!important;
}

.navbar a, .navbar a:focus {
    color: #978f8f !important;
}
#header{
    /* background-image: linear-gradient(to right,#74808B, #C4E1FF);

    opacity: 0.8; */
    background: white;
    color:#000!important;
    position: relative;

}
.justify-content-between {
  justify-content: center!important;
}

        </style>
      </head>
<!-- Menu horizontal fixed layout -->
<body>

    <!-- ======= Header ======= -->
    {{-- <header id="header" class="fixed-top d-flex align-items-center"> --}}

    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body mt-0">
                    <header id="header" class="bggrey d-flex align-items-center">
                        <div class="container d-flex justify-content-between">



                          <nav id="navbar" class="navbar">
                            <ul>
                              <li><a class="nav-link scrollto  {{ (request()->is('/')) ? 'active' : '' }} " href="{{url('/')}}">Home</a></li>
                              <li><a class="nav-link scrollto {{ (request()->is('about')) ? 'active' : '' }}" href="{{url('about')}}">About</a></li>
                              <li><a class="nav-link scrollto {{ (request()->is('aw1')) ? 'active' : '' }}" href="{{url('aw1')}}">Available Now</a></li>

                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                          </nav><!-- .navbar -->

                        </div>
                      </header><!-- #header -->
                    @yield('content')


                </div>
                <!-- Main-body end -->
                <div id="styleSelector">
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>





