@extends('uts.layout')

@section('title','Profil')

@section('isi')

<h1 class="fw-bold">
    TENTANG KAMI
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
            STYLE COWO GANTENG
        </h2>

        <p>
            STYLE COWO GANTENG merupakan toko fashion pria yang menyediakan
            berbagai produk berkualitas dengan desain modern dan harga yang
            terjangkau.
        </p>

        <p>
            Kami berkomitmen untuk memberikan produk terbaik agar setiap
            pelanggan dapat tampil lebih percaya diri dalam berbagai
            kesempatan.
        </p>

        <h4 class="mt-4">
            Visi
        </h4>

        <p>
            Menjadi toko fashion pria terpercaya yang menyediakan produk
            berkualitas dan mengikuti perkembangan tren fashion.
        </p>

        <h4 class="mt-4">
            Misi
        </h4>

        <ul>
            <li>Menyediakan produk fashion pria berkualitas.</li>
            <li>Memberikan pelayanan yang ramah kepada pelanggan.</li>
            <li>Mengikuti perkembangan tren fashion pria.</li>
            <li>Menawarkan harga yang terjangkau.</li>
        </ul>

        <h4 class="mt-4 mb-3">
            Hubungi Kami
        </h4>

        <p>
            <strong>WhatsApp :</strong> 085704541481
        </p>

        <p>
            <strong>Email :</strong> stylecowoganteng@gmail.com
        </p>

        <div class="mt-4">
            <a href="{{ url('/uts/produk') }}"
               class="btn btn-dark">
                Pesan Sekarang
            </a>
        </div>

    </div>

</div>

@endsection