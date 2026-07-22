@extends('uts.layout')

@section('title','Beranda')

@section('isi')

<h1 class="fw-bold">
    STYLE COWO GANTENG
</h1>

<hr>

<div class="row">

    <div class="col-md-3">

        <img src="{{ asset('images/banner.jpg') }}"
             class="img-fluid"
             style="width:100%;">

    </div>

    <div class="col-md-9">

        <h2 class="fw-bold">
            Selamat Datang
        </h2>

        <p>
            STYLE COWO GANTENG adalah toko fashion pria yang menyediakan berbagai
            produk pakaian modern dan berkualitas.
        </p>

        <p>
            Kami menawarkan berbagai pilihan fashion pria seperti kemeja,
            jaket, kaos, hoodie, dan celana dengan harga yang terjangkau.
        </p>

        <p>
            Fashion yang kami sediakan cocok digunakan untuk berbagai kegiatan,
            baik acara santai maupun acara formal.
        </p>

        <h3 class="mt-4">
            Keunggulan Kami
        </h3>

        <ul>
            <li>Produk berkualitas</li>
            <li>Harga terjangkau</li>
            <li>Model fashion terbaru</li>
            <li>Pelayanan ramah</li>
            <li>Nyaman digunakan sehari-hari</li>
        </ul>

        <a href="{{ url('/uts/produk') }}"
           class="btn btn-dark">
            Lihat Produk Kami ➔
        </a>

    </div>

</div>

@endsection