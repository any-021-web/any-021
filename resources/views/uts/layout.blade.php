<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | STYLE COWO GANTENG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1">

    <div class="container-fluid">

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarUTS"
                aria-controls="navbarUTS"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarUTS">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="{{ url('/uts') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="{{ url('/uts/produk') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="{{ url('/uts/profil') }}">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="{{ url('/uts/data') }}">
                        Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="{{ url('/') }}">
                        Kembali ke Dashboard Utama
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="container-fluid mt-4">

    @yield('isi')

</div>

<footer class="bg-dark text-white text-center py-2 mt-5">

    © 2026 STYLE COWO GANTENG | Fashion Pria Modern

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>