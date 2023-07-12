<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TouLEOS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('porterassets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('porterassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('porterassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('porterassets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('porterassets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/20230705_015017.png" alt="">
        <span id="Judul" class="d-none d-lg-block">TouLEOS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Kamu memiliki 4 pesan
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat semua</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Roma</h4>
                <p>Menunggu</p>
                <p>5 menit. lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Gion</h4>
                <p>Dibatalkan</p>
                <p>1 jam. lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Albani</h4>
                <p>Diterima</p>
                <p>2 jam. lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Chris</h4>
                <p> Terjadi kesalahan</p>
                <p>4 jam. lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Tampilkan semua nontifikasi</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

          <li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-chat-left-text"></i>
  <span class="badge bg-success badge-number">3</span>
</a><!-- End Messages Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
  <li class="dropdown-header">
    Kamu memiliki 3 pesan
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat semua</span></a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li class="message-item">
    <a href="#">
      <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
      <div>
        <h4>Vallerie</h4>
        <p>Selamat siang apakah melayani pengantaran barang-barang yang berat?</p>
        <p>3 menit. lalu</p>
      </div>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li class="message-item">
    <a href="#">
      <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
      <div>
        <h4>Angel</h4>
        <p>Selamat sore, saya sedang menunggu di depan pasar</p>
        <p>5 menit. lalu</p>
      </div>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li class="message-item">
    <a href="#">
      <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
      <div>
        <h4>Albaniboutje</h4>
        <p>Selamat siang, dimana tempat yang menjual ikan dengan kualitas terbaik?</p>
        <p>10 menit. lalu</p>
      </div>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li class="dropdown-footer">
    <a href="#">Tampilkan semua pesan</a>
  </li>

</ul><!-- End Messages Dropdown Items -->

</li><!-- End Messages Nav -->

<li class="nav-item dropdown pe-3">

  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <img src="{{ asset('porterassets/img/userprofile-img.jpeg') }}" alt="Profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle ps-2">Owen Kalumata</span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
      <h6>Owen Kalumata</h6>
      <span>Web Development</span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="{{ route('userporter') }}">
        <i class="bi bi-person"></i>
        <span>Profil Saya</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="{{ route('userporter') }}">
        <i class="bi bi-gear"></i>
        <span>Pengaturan Akun</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>Butuh bantuan?</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <i class="bi bi-box-arrow-right"></i>
        <span>Keluar</span>
      </a>
    </li>

  </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->

</ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Laman</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profil</span>
      </a>
    </li><!-- End Profile Page Nav -->

  </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Beranda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Pesanan <span>| Hari ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-muted small pt-2 ps-1">Peningkatan</span> <span id="Judulkita" class="text-success small pt-1 fw-bold">12%</span> 

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Pendapatan <span>| Bulan ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp.49.260</h6>
                    <span class="text-muted small pt-2 ps-1">Peningkatan</span> <span id="Judulkita" class="text-success small pt-1 fw-bold">8%</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Pelanggan <span>| Tahun ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-muted small pt-2 ps-1">Penurunan</span> <span class="text-danger small pt-1 fw-bold">12%</span> 

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Reports -->
          <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Laporan <span>/Hari ini</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Pesanan',
                        data: [31, 40, 28, 51, 42, 82, 56],
                      }, {
                        name: 'Pendapatan',
                        data: [11, 32, 45, 32, 34, 52, 41]
                      }, {
                        name: 'Pelanggan',
                        data: [15, 11, 32, 18, 9, 24, 11]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Pemesanan terbaru <span>| Hari ini</span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Pelanggan</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Roma</td>
                      <td><a href="#" class="text-primary">30 menit</a></td>
                      <td>Rp.15.000</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2147</a></th>
                      <td>Gion</td>
                      <td><a href="#" class="text-primary">-</a></td>
                      <td>-</td>
                      <td><span class="badge bg-warning">Menunggu</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2049</a></th>
                      <td>Boutje</td>
                      <td><a href="#" class="text-primary">60 menit</a></td>
                      <td>Rp.30.000</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Vallerie</td>
                      <td><a href="#" class="text-primar">-</a></td>
                      <td>-</td>
                      <td><span class="badge bg-danger">Ditolak</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Angel</td>
                      <td><a href="#" class="text-primary">25 menit</a></td>
                      <td>Rp.10.000</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>TouLEOS</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('porterassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('porterassets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('porterassets/js/main.js') }}"></script>

</body>

</html>
