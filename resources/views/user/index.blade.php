<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TouLEOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="#">
                    <img src="{{ asset('assets/img/logo.png') }}">
                </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#histori">Riwayat</a></li>
                    <li><a class="nav-link scrollto" href="#about">Promosi</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('logout') }}">KELUAR</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Selalu Siap Melayani Anda</h1>
                    <h2>Silahkan Melakukan Pemesanan Dengan Menekan Tombol Layanan</h2>
                    <div><a href="#services" class="btn-get-started scrollto">Layanan</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan</h2>
                    <p>Tersedia tingkatan porter yang dapat anda pesan</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Porter</a></h4>
                            <p>Pemesanan porter dapat dilakukan dengan mengklik tombol pesan</p>
                            <br>
                            <button type="submit" class="btn-pesan"><a href="{{ route('services') }}">PESAN</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- History Section -->
        <section id="histori" class="histori">
            <div class="container mt-5">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th class="text-dark text">No.</th>
                            <th class="text-dark text">Tanggal</th>
                            <th class="text-dark text">Waktu Mulai</th>
                            <th class="text-dark text">Waktu Selesai</th>
                            <th class="text-dark text">Harga/Menit</th>
                            <th class="text-dark text">Harga</th>
                            <th class="text-dark text">Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Dagangan</h3>
                        <p class="fst-italic">
                            Cabai Asli Manado
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Bersih</li>
                            <li><i class="bi bi-check-circle"></i>Murah</li>
                        </ul>
                        <a href="#" class="read-more">Baca Selengkapnya <i class="bi bi-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer-contact">
                            <h3>TouLEOS</h3>
                            <p>
                                Universitas Sam Ratulangi<br>
                                Bahu, Malalayang, Kota Manado, Sulawesi Utara<br>
                                Indonesia <br><br>
                                <strong>Phone:</strong> +62895804049310<br>
                                <strong>Email:</strong> romanouke@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-2 col-md-7 footer-links">
                            <h4>Pintasan</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Riwayat</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="copyright-wrap d-md-flex py-4">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>TouLEOS</span></strong>. All Rights Reserved
                        </div>

                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>

                </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>

        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
