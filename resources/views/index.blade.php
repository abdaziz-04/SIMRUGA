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
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark" id="mainNav" style="--bs-secondary: #eff6ff;--bs-secondary-rgb: 239,246,255;color: rgb(10,10,11);background: rgb(239,246,255);">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: rgb(38,99,235);">SIMRUGA</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#team" data-bs-target="#team">STRUKTUR</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Selamat Datang di</span></div>
                <div class="intro-heading text-uppercase">
    <span>RW 8, Sawojajar, Kedungkandang</span>
    </div>
    <a class="btn btn-primary btn-xl text-uppercase" role="button" href="/admin/login">
        BUKA SISTEM INFORMASI RUKUN WARGA
    </a>
            </div>
        </div>
    </header>

    <section id="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Lokasi</h2>
                </div>
                <div class="col-lg-12 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1959812314476!2d112.65307167368537!3d-7.978684992046556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62842c935c8f1%3A0x72cecd5a022b06fa!2sJl.%20Simpang%20Danau%20Maninjau%20Sel.%20Dalam%20I%2C%20Sawojajar%2C%20Kec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065139!5e0!3m2!1sid!2sid!4v1717262417808!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">FITUR SERBA DIGITAL</h2>
                    <h3 class="text-muted section-subheading">Akses semua fitur dengan mudah hanya menggunakan perangkat digital</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">BERITA TERBARU</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-paste fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">PENGAJUAN LAYANAN DAN PELAPORAN</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">KEUANGAN DESA</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-database fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">STATISTIK PENDUDUK</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                @foreach($pengurus as $member)
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="rounded-circle mx-auto" src="assets/img/team/{{ $member->id }}.jpg" alt="{{ $member->nama_pengurus }}">
                            <h4>{{ $member->nama_pengurus }}</h4>
                            <p class="text-muted">{{ $member->jabatan }}</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item"><a href="tel:{{ $member->no_telepon }}"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
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
