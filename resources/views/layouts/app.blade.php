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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">QC - YAMAHA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" class="active">Halaman Utama</a></li>

          <li class="dropdown"><a href="#"><span>Tentang Yamaha</span> <i class="bi bi-chevron-down"></i></a>
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>QC-YAMAHA</span></h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Gilamotor.com</h2>
              <p class="animate__animated animate__fadeInUp">Merk Yamaha menjadi salah satu merk yang diandalkan oleh pembalap lokal dan dunia Gilmoters, oleh sebab itu kegiatan balap terus dilakoni untuk pencarian bibit dan tentunya brand image dari Yamaha.</p>
              {{-- <a href="https://www.gilamotor.com/2020/02/jelang-pertarungan-balap-yamaha-umumkan-formasi-yri/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Manufacturing Yamaha</h2>
              <p class="animate__animated animate__fadeInUp">Proses QC dilakukan diproses ini, aplikasi QC-YAMAHA memudahkan operator dalam proses pengecekan kondisi rakitan motor</p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>KANDO</h2>
            <h3>Pembuat Perusahaan Yamaha</h3>
            <div style="text-align:center">
                <img src="assets/img/about/mission-1.jpg" alt="kando sign" srcset="">
            </div>
            <br>
            <br>
            <br>
            <p>
                Sejak pendiri kami, Genichi Kawakami, mendirikan Yamaha Motor pada tahun 1955,
                adalah misi kami untuk memberikan KANDO kepada SEMUA pelanggan kami.
                Dan tidak hanya dengan produk kami.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                KANDO adalah istilah Jepang untuk menggambarkan perasaan kepuasan dan kegembiraan yang luar biasa
                yang dirasakan seseorang ketika memiliki sesuatu dengan nilai, kualitas, dan kinerja yang luar biasa.
                Ini adalah emosi yang menggembirakan yang menambahkan bumbu ke dalam hidup Anda dan membuat jantung Anda berdebar kencang!
                Produk dan layanan kami telah dirancang dan dikembangkan oleh orang-orang yang benar-benar mencintai pekerjaan mereka,
                dan yang tujuannya adalah untuk menawarkan pengalaman terbaik kepada Anda.
            </p>
            <div class="row col-12">
                <img src="assets/img/about/mission-2.jpg" alt="kando.jpg" srcset="">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="row content">
            <h2>SLOGAN</h2>
        <div class="col-6">
          <img src="assets/img/about/slogan-1.jpg" alt="Revs your Heart" class="main-slogan-img-brand" decoding="async" loading="lazy">
          <div>
            <h2 class="main-slogan-text-title">Yamaha Revs your Heart. :</h2>
            <p class="main-slogan-text-desc">Mengungkapkan keinginan Yamaha untuk membawa KANDO kepada pelanggan dan “menggeber hati mereka” melalui banyak produk inovatif dan KANDO Creating yang kita lakukan.</p>
          </div>
        </div>
        <div class="col-6">
          <img src="assets/img/about/slogan-2.jpg" alt="Semakin di Depan" class="main-slogan-img-brand" decoding="async" loading="lazy">
          <div>
            <h2 class="main-slogan-text-title">Yamaha Semakin di Depan.</h2>
            <p class="main-slogan-text-desc">Mencerminkan semangat baru untuk selalu berbuat (hari ini) lebih baik dari kemarin dan diharapkan konsumen Yamaha juga merasakan semangat yang sama.</p>
          </div>
        </div>
        </div>
    </section>
    <!-- ======= END SLOGAN/CLIENT ======= -->

    <!-- ======= History ======= -->
    {{-- <section id="history" class="history">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4></h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <h2>SEJARAH</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-1.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Berdirinya Yamaha</a></h4>
                        <p>Nippon gakki didirikan oleh Torakusu Yamaha.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1887</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-2.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Yamaha Memproduksi Piano</a></h4>
                        <p>Yamaha mulai memproduksi Piano Tegak dan Piano Akustik.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1900</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-3.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Baling-Baling Pesawat Terbang</a></h4>
                        <p>Yamaha membuat baling-baling untuk Pesawat Terbang.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1935</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-4.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Yamaha Music School</a></h4>
                        <p>Yamaha membuka pertama kali kelas music organ.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1954</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-5.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Terbentuknya Yamaha Motor</a></h4>
                        <p>Terbentuknya Yamaha Motor, YA-1 merupakan produk pertama yang di produksi dan menjuarai balapan di Fuji &amp; Assen.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1955</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-6.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Memperluas Bisnisnya ke Pasar Global</a></h4>
                        <p>Yamaha mulai memperluas bisnisnya ke pasar global, dengan menjual produk ke belahan negara lain, yang ditandai dengan didirikannya Yamaha International Corporation (YIC) di Amerika Serikat.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1960</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-7.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Sepeda Motor Yamaha Menjuarai Kejuaraan International</a></h4>
                        <p>Sepeda motor Yamaha memenangkan berbagai kejuaraan internasional, Meraih gelar pabrikan di semua kelas road race World GP, 125cc, 250cc, 350cc, dan 500cc.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1970</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="row">
                    <div class="col-3">
                       <img src="assets/img/about/history-8.jpg" alt="History Image 1" class="main-history-img" decoding="async" loading="lazy">
                    </div>
                    <div class="col-8">
                        <h4><a href="#">Berdirinya Yamaha Motor di Indonesia</a></h4>
                        <p>PT. Yamaha Indonesia Motor Manufacturing (YIMM) didirikan di Indonesia sebagai pembuat suku cadang sepeda motor.</p>
                    </div>
                    <div class="col-1 right-rounded">
                        <h2>1974</h2>
                    </div>
                </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Yamaha Head Office</h3>
              <p>
                Jl. DR KRT Radjiman Widyodiningrat RT/RW 009-06  <br>
                Rawa Terate, Cakung Jakarta Timur 13920 Indonesia.<br><br>
                <strong>Phone:</strong> 021-2457-5555 <br>
                <strong>Email:</strong> contact_center@yamaha-motor.co.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="www.twitter.com/yamahaindonesia" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="www.facebook.com/yamaholigan" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="instagram.com/yamahaindonesia" class="instagram"><i class="bx bxl-instagram"></i></a>
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
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
