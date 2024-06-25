<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pengumuman</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="course-item">
        <div class="text-center">
            <img src="{{ asset('storage/' . $pengumuman->gambar) }}" style="width: 70%; height: auto;">

            <div class="course-content">
                <h2 class="display-5 fw-bolder">{{ $pengumuman->nama_pengumuman }}</h2>
            </div>
            <div class="mt-4">
                <p style="line-height: 1.5; margin-bottom: 30px;">{{ $pengumuman->isi_pengumuman }}</p>
            </div>
            <div class="mt-4 text-center">
                <a href="{{ url('/') }}" class="btn btn-primary text-uppercase">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>
