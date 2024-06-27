<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pengumuman</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <img style="max-height:400px; width:100%; object-fit:cover;" src="https://png.pngtree.com/png-clipart/20220213/original/pngtree-announcement-design-vector-png-png-image_7268498.png" alt="Gambar Pengumuman" class="img-fluid">
                </div>
                <div class="card-body">
                    <h2 class="card-title text-center">{{ $pengumuman->nama_pengumuman }}</h2>
                    <p class="card-text mt-4">{{ $pengumuman->isi_pengumuman }}</p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="btn btn-primary text-uppercase">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXlZSYQfY4Y02z1z9+XtL6QfWlxmX4czE7g2zF8zE+3bUJxK2o9Yc5UsY7g5" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-qIzmAdpR+MQ+ZsOT+tBDj4UjRYfa1IoE/c8kSiZ5ZwFOe8tDJb1Rx37SF2u8S+3g" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
