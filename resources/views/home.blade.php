@extends('layouts.app')
@section('content')
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
@endsection