<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>QUALITY CHECKLIST</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">QC - YAMAHA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero" class="active">Halaman Utama</a></li>

                    <li class="dropdown"><a href="#"><span>Tentang Yamaha</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#about">Misi</a></li>
                            <li><a href="#clients">Slogan</a></li>
                            <li><a href="#services">Sejarah</a></li>

                        </ul>
                    </li>
                    <li><a href="#footer">Kontak</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</a>
                        </li>
                        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route('voyager.logout') }}" class="nav-link">Logout</a></li>
                                {{-- <li><a class="nav-link" href="{{ route('voyager.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('voyager.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li> --}}

                            </ul>
                        </li>

                    @endguest
                    {{-- <li><a href="{{ url('admin/login') }}" class="getstarted">Login</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    @yield('content');
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Yamaha Head Office</h3>
                            <p>
                                Jl. DR KRT Radjiman Widyodiningrat RT/RW 009-06 <br>
                                Rawa Terate, Cakung Jakarta Timur 13920 Indonesia.<br><br>
                                <strong>Phone:</strong> 021-2457-5555 <br>
                                <strong>Email:</strong> contact_center@yamaha-motor.co.id<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="www.twitter.com/yamahaindonesia" class="twitter"><i
                                        class="bx bxl-twitter"></i></a>
                                <a href="www.facebook.com/yamaholigan" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="instagram.com/yamahaindonesia" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Hamalan Utama</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Yamaha Indonesia</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Misi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#clients">Slogan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#footer">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Kritik dan saran</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PT. Yamaha Indonesia</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->






    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    @yield('script');

</body>

</html>
