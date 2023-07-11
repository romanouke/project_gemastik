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
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/services.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="ambil dari page porter" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Name ambil dari page porter</h5>
                            <details>
                                <summary>Detail</summary>
                                <p>ambil dari page porter</p>
                            </details>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#detailPemesanan">
                        PESAN
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="detailPemesanan" aria-labelledby="detailPemesananLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailPemesananLabel">Detail Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Edit Mahasiswa -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="edit-nama">Nama Porter</label>
                            <input type="text" class="form-control" id="edit-nama" name="edit-nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="edit-nama">Kontak Porter</label>
                            <input type="text" class="form-control" id="edit-nama" name="edit-nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="edit-nim">Tanggal</label>
                            <input type="text" class="form-control" id="edit-nim" name="edit-nim" value="">
                        </div>
                        <div class="form-group">
                            <label for="edit-nim">Harga</label>
                            <input type="text" class="form-control" id="edit-nim" name="edit-nim" value="">
                        </div>
                        <div class="form-group">
                            <label for="edit-nim">Durasi</label>
                            <input type="text" class="form-control" id="edit-nim" name="edit-nim" value="">
                        </div>
                        <div class="form-group">
                            <label for="edit-nim">Deskripsi Belanjaan</label>
                            <input type="text" class="form-control" id="edit-nim" name="edit-nim" value="">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
