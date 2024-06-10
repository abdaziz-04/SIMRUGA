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

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename text-primary">Simruga</h1>
            </a>

            <nav id="navmenu" class="navmenu text-primary">
                <ul>
                    <li><a href="index.html" class="active">Home<br></a></li>
                    <li><a href="about.html">Pengumuman</a></li>
                    <li><a href="courses.html">Tentang Kami</a></li>
                    <li><a href="contact.html">Hubungi </a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/satu.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <h1 class="display-2 fw-bolder" data-aos="fade-up">RW 8</h1>
                <h2 class="display-5 fw-bolder" data-aos="fade-up" data-aos-delay="100">Sawojajar</h2>
                <h3 class="display-5 fw-bolder"data-aos="fade-up" data-aos-delay="200">Kota Malang</h3>
                <p data-aos="fade-up" data-aos-delay="300">Temukan kemudahan dalam mengrus administrasi dan</p>
                <p data-aos="fade-up" data-aos-delay="300"> data pribadimu bersama SIMRUGA</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="/admin/login" class="btn-get-started">Login</a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Courses Section -->
        <section id="courses" class="courses section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Pengumuman</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="row text-left">
                        @foreach ($data_pengumuman as $index => $pengumuman)
                            <div class="col-md-3 mb-4" data-aos="fade-down" data-aos-delay="{{ $index * 100 }}">
                                <div class="card h-100">
                                    <div class="card-img-top d-flex align-items-center justify-content-center"
                                        style="height: 200px; background-color: #eaeaea;">
                                        <span class="fw-bolder" style="font-size: 24px; color: #333;">simruga</span>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $pengumuman['nama_pengumuman'] }}</h5>
                                        <a href="{{ route('pengumuman', $pengumuman->id_pengumuman) }}"
                                            class="btn btn-primary mt-auto">Lihat Pengumuman</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </section><!-- /Courses Section -->

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
                        src="https://lookerstudio.google.com/embed/reporting/d5d1ecd9-9d72-47e6-8eb7-a2e443e4b460/page/p_vfix41czhd"
                        width="100%" height="1015" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
        <section id="services">
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
                    <div class="col-md-6" data-aos="fade-down">
                        <span class="bi bi-newspaper" style="font-size: 4rem;"></span>
                        <h4 class="display-7 fw-bolder">Berita Terbaru</h4>
                        {{-- <h4 class="section-heading">BERITA TERBARU</h4> --}}
                        <p class="text-muted">Menyajikan berita terupdate seputar RW 8 Kelurahan Sawojajar Kecamatan
                            Kedungkandang</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <span class="bi bi-envelope-arrow-up" style="font-size: 4rem;"></span>
                        <h4 class="display-7 fw-bolder">Pelaporan & Pengajuan Layanan</h4>
                        <p class="text-muted">Memberikan sistem pelayanan dan pelaporan yang efisien, agar mempermudah
                            warga
                            di dalam kondisi apapun</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6" data-aos="fade-down">
                        <span class="bi bi-currency-dollar" style="font-size: 4rem;"></span>
                        <h4 class="display-7 fw-bolder">Keuangan Warga</h4>
                        <p class="text-muted">Menampilkan pelaporan keuangan RW mulai dari uang masuk hingga uang
                            keluar
                            secara real time</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <span class="bi bi-graph-up" style="font-size: 4rem;"></span>
                        <h4 class="display-7 fw-bolder">Statistik Penduduk</h4>
                        <p class="text-muted">Rekap data penduduk RW 8 untuk membantu pemerintah dalam mengendalikan
                            pertumbuhan warga</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="map">
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

        <!-- Trainers Index Section -->
        <section id="trainers-index" class="section trainers-index">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center" data-aos="zoom-in-up">
                        <h2 class="display-5 fw-bolder">Hubungi Pengurus RW</h2>
                    </div>

                    @foreach ($pengurus as $index => $member)
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>{{$member->jabatan}}</h4>
                                    <span>{{$member->nama_pengurus}}</span>
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

        </section><!-- /Trainers Index Section -->

    </main>

    <footer id="footer" class="footer position-relative">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Mentor</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>



        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Mentor</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
