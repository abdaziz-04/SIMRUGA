<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="--bs-primary: #2663eb;--bs-primary-rgb: 38,99,235;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - SIMRUGA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>



<body id="page-top" class="mt-4" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark" id="mainNav"
        style="--bs-secondary: #eff6ff;--bs-secondary-rgb: 239,246,255;color: rgb(10,10,11);background: rgb(239,246,255);">
        <div class="container"><a class="navbar-brand" href="#page-top"
                style=" font-family: 'Liberation Sans'; color: rgb(255, 255, 255);font-size: 24px;">SIMRUGA</a><button
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#team" data-bs-target="#team">STRUKTUR</a></li>
                </ul>
            </div> --}}
        </div>
    </nav>
    <div id="carouselExampleRide" class="carousel slide mt-4" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption top-0 mt-4 bottom-0 d-none d-md-block " style="padding-bottom: 40px">


                    <p class="welcome-text fs-3 text-uppercase " style="margin-top: 30px">Selamat Datang di</p>
                    <h3 class="location-text display-3 fw-bolder">RW 8, Sawojajar, Kedungkandang</h3>
                    <a class="btn btn-primary btn-lg text-uppercase" role="button" href="/admin/login">
                        BUKA SISTEM INFORMASI RUKUN WARGA
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="card-body">
        <section id="services">
            <div class="container">
                <div class="row text-left">
                    @foreach ($data_pengumuman as $pengumuman )
                        <div class="col-md-6">
                            <div>{{ $pengumuman['gambar'] }}</div>
                            <div>{{ $pengumuman['nama_pengumuman'] }}</div>
                            <a href="{{route('pengumuman',$pengumuman->id_pengumuman)}}">liat pengumuman</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>


    {{-- <section id="team">
        <div class="container">
            <div class="row">
                @foreach ($pengurus->take(4) as $member)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-0">
                        <!-- Use col-lg-3 for a 1x4 grid, col-md-4 for a 1x3 grid, and col-sm-6 for a 1x2 grid -->
                        <div class="team-member">
                            <img class="rounded-circle mx-auto" src="assets/img/team/{{ $member->jabatan }}.jpg"
                                alt="{{ $member->nama_pengurus }}">
                            <h4>{{ $member->nama_pengurus }}</h4>
                            <p class="text-muted">{{ $member->jabatan }}</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item"><a
                                        href="https://wa.me/{{ $member->no_telepon }}?text=Halo,%20saya%20tertarik%20untuk%20menghubungi%20Anda."
                                        target="_blank">
                                        <i class="fa fa-whatsapp"></i></li>
                                </a>
                                <li class="list-inline-item"><a href="tel:{{ $member->no_telepon }}"><i
                                            class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <div class="container">
            <div class="col-lg-12 text-center">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Data Grafik</h2>
                </div>
                <iframe class="embed-responsive-item"
                    src="https://lookerstudio.google.com/embed/reporting/d5d1ecd9-9d72-47e6-8eb7-a2e443e4b460/page/p_vfix41czhd"
                    width="100%" height="1050" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>

    <section id="services">
        <div class="container" style="margin-top: 2px">
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-blue"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">BERITA TERBARU</h4>
                    <p class="text-muted">Menyajikan berita terupdate seputar RW 8 Kelurahan Sawojajar Kecamatan
                        Kedungkandang</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-blue"></i>
                        <i class="fa fa-paste fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">PENGAJUAN LAYANAN & PELAPORAN</h4>
                    <p class="text-muted">Memberikan sistem pelayanan dan pelaporan yang efisien, agar mempermudah
                        warga
                        di dalam kondisi apapun</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-blue"></i>
                        <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">KEUANGAN DESA</h4>
                    <p class="text-muted">Menampilkan pelaporan keuangan RW mulai dari uang masuk hingga uang keluar
                        secara real time</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-blue"></i>
                        <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">STATISTIK PENDUDUK</h4>
                    <p class="text-muted">Rekap data penduduk RW 8 untuk membantu pemerintah dalam mengendalikan
                        pertumbuhan warga</p>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Lokasi</h2>
                </div>
                <div class="col-lg-12 text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1959812314476!2d112.65307167368537!3d-7.978684992046556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62842c935c8f1%3A0x72cecd5a022b06fa!2sJl.%20Simpang%20Danau%20Maninjau%20Sel.%20Dalam%20I%2C%20Sawojajar%2C%20Kec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065139!5e0!3m2!1sid!2sid!4v1717262417808!5m2!1sid!2sid"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© SIMRUGA 2024</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
