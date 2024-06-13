<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SIMRUGA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">



    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    {{-- logo --}}

    <header id="header" class="header d-flex align-items-center sticky-top">

        {{-- favicon --}}
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/favicon.png" rel="apple-touch-icon">

        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/favicon.png" alt="">
                <h1 class="sitename text-primary">Simruga</h1>
            </a>

            <nav id="navmenu" class="navmenu text-primary">
                <ul>
                    <li><a href="#heroo" class="active">Home<br></a></li>
                    <li></li>
                    <li><a href="#news">Pengumuman</a></li>
                    <li><a href="#grafik">Grafik</a></li>
                    <li><a href="#tentangkami">Tentang Kami</a></li>
                    <li><a href="#map">Lokasi </a></li>
                    <li><a href="#pengurus">Hubungi </a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="heroo" class="hero section">

            <img src="assets/img/satu.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <h1 class="display-2 fw-bolder" data-aos="fade-up">RW 8</h1>
                <h2 class="display-5 fw-bolder" data-aos="fade-up" data-aos-delay="100">Sawojajar</h2>
                <h3 class="display-5 fw-bolder"data-aos="fade-up" data-aos-delay="200">Kota Malang</h3>
                <p data-aos="fade-up" data-aos-delay="300">Temukan kemudahan dalam mengurus administrasi dan</p>
                <p data-aos="fade-up" data-aos-delay="300"> data pribadimu bersama SIMRUGA</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="/admin/login" class="btn-get-started">Login</a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Courses Section -->
        <div class="" id="news">
            <section id="" class="courses section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Simmruga</h2>
                    <p>Pengumuman</p>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($data_pengumuman as $index => $pengumuman)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="course-item">
                                    @if ($pengumuman->gambar)
                                        <img src="{{ asset('storage/' . $pengumuman->gambar) }}"
                                            class="card-img-top uniform-img" alt="Gambar Pengumuman">
                                    @else
                                        <img src="https://via.placeholder.com/150" class="card-img-top uniform-img"
                                            alt="No Image">
                                    @endif
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p>
                                                <a class="btn btn-primary mt-auto"
                                                    href="{{ route('pengumuman', $pengumuman->id_pengumuman) }}">Lihat
                                                    Pengumuman</a>
                                            </p>
                                        </div>
                                        <h3>{{ $pengumuman['nama_pengumuman'] }}</h3>
                                        <p class="description">{{ $pengumuman->isi_pengumuman }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <!-- /Courses Section -->

        <!-- Counts Section -->
        <section id="counts" class="section counts">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center align-items-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $lastWarga }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Warga</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $lastRT }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah RT</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $lastlayanan }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Pelayanan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $lastbansos }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Penerima Bansos</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Counts Section -->

        <div class="" id="grafik">
            <section id="">
                <div class="container mt-0">
                    <div class="col-lg-12 text-center">
                        <div class="col-lg-12 text-center" data-aos="fade-down">
                            <h2 class="display-5 fw-bolder">Dalam Grafik</h2>
                            <p style="line-height: 1.5; margin-bottom: 30px; font-size: 20px">
                                Menunjukan penyajian data warga dalam bentuk grafis
                            </p>
                        </div>
                        <div data-aos="fade-up">
                            <iframe class="embed-responsive-item"
                                src="https://lookerstudio.google.com/embed/reporting/2fb7c4ba-4915-42c0-9361-3d506bb65690/page/C9w2D"
                                width="100%" height="1000" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="" id="tentangkami">
            <section>
                <div class="container mt-0">

                    <div class="col-lg-12 text-center" data-aos="zoom-in-up">
                        <h2 class="display-5 fw-bolder">Tentang Kami</h2>
                        <p style="line-height: 1.5; margin-bottom: 30px; font-size: 20px">
                            SIMRUGA / Sistem Informasi Rukun Warga merupakan pusat informasi bagi RW 8
                            yang digitalisasikan agar memungkinkan mobilitas informasi, data,
                            dan proses adminitrasi warga lebih mudah.
                        </p>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-6" data-aos="zoom-in-up">
                            <span class="bi bi-newspaper" style="font-size: 4rem;"></span>
                            <h4 class="display-7 fw-bolder">Berita Terbaru</h4>
                            {{-- <h4 class="section-heading">BERITA TERBARU</h4> --}}
                            <p class="text-muted">Menyajikan berita terupdate seputar RW 8 Kelurahan Sawojajar
                                Kecamatan
                                Kedungkandang</p>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in-up">
                            <span class="bi bi-envelope-arrow-up" style="font-size: 4rem;"></span>
                            <h4 class="display-7 fw-bolder">Pelaporan & Pengajuan Layanan</h4>
                            <p class="text-muted">Memberikan sistem pelayanan dan pelaporan yang efisien, agar
                                mempermudah
                                warga
                                di dalam kondisi apapun</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6" data-aos="zoom-in-up">
                            <span class="bi bi-currency-dollar" style="font-size: 4rem;"></span>
                            <h4 class="display-7 fw-bolder">Keuangan Warga</h4>
                            <p class="text-muted">Menampilkan pelaporan keuangan RW mulai dari uang masuk hingga uang
                                keluar
                                secara real time</p>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in-up">
                            <span class="bi bi-graph-up" style="font-size: 4rem;"></span>
                            <h4 class="display-7 fw-bolder">Statistik Penduduk</h4>
                            <p class="text-muted">Rekap data penduduk RW 8 untuk membantu pemerintah dalam
                                mengendalikan
                                pertumbuhan warga</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="" id="map">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center" data-aos="fade-down">
                            <h2 class="display-5 fw-bolder">Lokasi RW 8</h2>
                        </div>
                        <div class="col-lg-12 text-center" data-aos="fade-up">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1959812314476!2d112.65307167368537!3d-7.978684992046556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62842c935c8f1%3A0x72cecd5a022b06fa!2sJl.%20Simpang%20Danau%20Maninjau%20Sel.%20Dalam%20I%2C%20Sawojajar%2C%20Kec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065139!5e0!3m2!1sid!2sid!4v1717262417808!5m2!1sid!2sid"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Trainers Index Section -->
        <div class="" id="pengurus">
            <section class="section trainers-index">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 text-center" data-aos="zoom-in-up">
                            <h2 class="display-5 fw-bolder">Hubungi Pengurus RW</h2>
                        </div>

                        @foreach ($pengurus as $index => $member)
                            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="member">
                                    <img src="assets/img/trainers/{{ $member->jabatan }}.jpg" class="img-fluid"
                                        alt="">
                                    <div class="member-content">
                                        <h4>{{ $member->jabatan }}</h4>
                                        <span>{{ $member->nama_pengurus }}</span>
                                        <div class="social">
                                            <li class="list-inline-item"><a href="tel:{{ $member->no_telepon }}"><i
                                                        class="fa fa-whatsapp"></i></a></li>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    </div>

                </div>

            </section>
        </div><!-- /Trainers Index Section -->

    </main>

    <footer id="footer" class="footer position-relative">
        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Developer Section -->
                <div class="col-lg-6 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Developer</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Abdul Aziz</p>
                        <p>Athiyan Aqil</p>
                        <p>Maulita Yasmin</p>
                        <p>Yuma Rakha S</p>
                        <p>Jessica Oktavia</p>
                    </div>
                </div>
                <!-- Photo and Copyright Section -->
                <div class="col-lg-6 col-md-6 footer-newsletter text-center">
                    <div class="footer-photo">
                        <img src="assets/img/developer-team.jpg" class="img-fluid" alt="Developer Team" style="max-width: 70%; height: auto;">
                    </div>
                    <p class="mt-3">© <span>Copyright</span> <strong class="px-1 sitename">Simruga</strong> <span>2024</span></p>
                    <div class="social-links d-flex justify-content-center mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
