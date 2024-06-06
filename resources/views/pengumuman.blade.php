<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Pengumuman</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- aos --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>

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
    <div class="container">
        <div class="text-center">
            <img src="{{ $pengumuman->gambar }}" class="img-fluid" alt="{{ $pengumuman->nama_pengumuman }}" style="max-width: 100%; height: auto;">
        </div>
        <div class="mt-4 text-center">
            <h1>{{ $pengumuman->nama_pengumuman }}</h1>
        </div>
        <div class="mt-4">
            <p>{{ $pengumuman->isi_pengumuman }}</p>
        </div>
        <div class="mt-4 text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Daftar Pengumuman</a>
        </div>
    </div>
    <img src="" alt="">
</body>
</html>
