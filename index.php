<?php
    include 'base_url.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Desa Berlian</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= $base_url; ?>assets/images/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= $base_url; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base_url; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= $base_url; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= $base_url; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= $base_url; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="<?= $base_url; ?>assets/css/my-style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.6.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SIDEBA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="<?= $base_url; ?>login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>SISTEM INFORMASI DESA BERLIAN</h1>
          <h2 style="font-size: 16px;line-height: 24px;">
            SIDEBA atau Sistem Informasi Desa Berlian merupakan aplikasi yang memudahkan perangkat desa
            khususnya Desa Berlian untuk melakukan pelayanan dan mudah digunakan.
          </h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Daftar Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= $base_url; ?>assets/images/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services mb-5">
      <div class="container">

        <div class="row justify-content-center align-items-stretch">
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h3>10</h3>
              <h4 class="title"><a href="">Penduduk</a></h4>
              <p class="description">Desa Berlian mempunyai total penduduk sebanyak 10 orang.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-male"></i></div>
              <h3>6</h3>
              <h4 class="title"><a href="">Laki-laki</a></h4>
              <p class="description">Desa Berlian mempunyai penduduk yang berjenis kelamin laki-laki sebanyak 6 orang.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-female"></i></div>
              <h3>4</h3>
              <h4 class="title"><a href="">Perempuan</a></h4>
              <p class="description">Desa Berlian mempunyai penduduk yang berjenis kelamin perempuan sebanyak 4 orang.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hands-helping"></i></div>
              <h3>2</h3>
              <h4 class="title"><a href="">Bantuan</a></h4>
              <p class="description">Desa Berlian telah memberikan bantuan kepada penduduk sebanyak 2 bantuan.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <h3>4</h3>
              <h4 class="title"><a href="">Vaksin</a></h4>
              <p class="description">Desa Berlian telah melaksanakan vaksin. Penduduk yang telah di vaksin sebanyak 4
                orang.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Layanan</span>
          <h2>Layanan</h2>
          <p>Berikut adalah layanan yang ditawarkan aplikasi SIDEBA.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-file-alt"></i></div>
              <h4><a href="">Surat Keterangan Kelakukan Baik</a></h4>
              <p>SIDEBA menyediakan layanan untuk pengajuan Surat Keterangan Kelakuan Baik</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-file-alt"></i></div>
              <h4><a href="">Surat Keterangan Usaha</a></h4>
              <p>SIDEBA menyediakan layanan untuk pengajuan Surat Keterangan Usaha</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-file-alt"></i></div>
              <h4><a href="">Surat Keterangan Tidak Mampu</a></h4>
              <p>SIDEBA menyediakan layanan untuk pengajuan Surat Keterangan Tidak Mampu</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Tapa - Kabila, Tamboo, Tilongkabila, Kabupaten Bone Bolango, Gorontalo 96129</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+62 82261310113</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98968.80193671134!2d122.96309783327222!3d0.5893322103069331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed3a8045b7dab%3A0xddc9be0447f7635f!2sKantor%20Desa%20Berlian!5e0!3m2!1sen!2sid!4v1637245102002!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>SIDEBA</h3>
            <p>
              SIDEBA atau Sistem Informasi Desa Berlian merupakan aplikasi yang memudahkan perangkat desa
              khususnya Desa Berlian untuk melakukan pelayanan dan mudah digunakan.
            </p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright 2021 <strong><span>SIDEBA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="fas fa-angle-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= $base_url; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $base_url; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= $base_url; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= $base_url; ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= $base_url; ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= $base_url; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= $base_url; ?>assets/js/main.js"></script>

</body>

</html>