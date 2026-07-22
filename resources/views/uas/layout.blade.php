<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | BLACKCOFFEE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body style="background-color:#f5f5f5;">

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 bg-dark text-white min-vh-100 p-3">

            <h3 class="text-center mb-4">
                ☕ BLACKCOFFEE
            </h3>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="{{ url('/uas') }}" class="nav-link text-white">
                        <i class="bi bi-house-door-fill"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="{{ url('/uas/data') }}" class="nav-link text-white">
                        <i class="bi bi-cup-hot-fill"></i>
                        Data Menu
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="{{ url('/uas/tambah') }}" class="nav-link text-white">
                        <i class="bi bi-plus-circle-fill"></i>
                        Tambah Menu
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="{{ url('/') }}" class="nav-link text-white">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        Back to Dashboard Utama
                    </a>
                </li>
            </ul>

        </div>

        <div class="col-md-10 p-4">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('isi')

        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>