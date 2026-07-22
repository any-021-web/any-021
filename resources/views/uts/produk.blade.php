@extends('uts.layout')

@section('title', 'Produk')

@section('isi')

<div class="text-center mb-5">
    <h1 class="fw-bold">Produk Kami</h1>
    <p class="text-muted">Temukan fashion pria terbaik dengan kualitas premium.</p>
</div>

<div class="row">

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/kemeja.jpg') }}"class="card-img-top p-3"style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Kemeja</h5>
                <h6 class="text-primary">Rp150.000</h6>
                <p>Kemeja pria elegan dan nyaman dipakai.</p>

                <a href="{{ url('/uts/pemesanan?produk=Kemeja') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/jaket.jpg') }}" class="card-img-top p-3" style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Jaket</h5>
                <h6 class="text-primary">Rp250.000</h6>
                <p>Jaket modern untuk segala aktivitas.</p>

                <a href="{{ url('/uts/pemesanan?produk=Jaket') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/celana.jpg') }}" class="card-img-top p-3" style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Celana Panjang</h5>
                <h6 class="text-primary">Rp200.000</h6>
                <p>Celana pria dengan bahan berkualitas.</p>

                <a href="{{ url('/uts/pemesanan?produk=Celana Panjang') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/kaos.jpg') }}" class="card-img-top p-3" style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Kaos</h5>
                <h6 class="text-primary">Rp120.000</h6>
                <p>Kaos casual yang nyaman digunakan sehari-hari.</p>

                <a href="{{ url('/uts/pemesanan?produk=Kaos') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/hoodie.jpg') }}" class="card-img-top p-3" style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Hoodie</h5>
                <h6 class="text-primary">Rp280.000</h6>
                <p>Hoodie premium dengan desain kekinian.</p>

                <a href="{{ url('/uts/pemesanan?produk=Hoodie') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <img src="{{ asset('images/celana_pendek.jpg') }}" class="card-img-top p-3" style="height:250px; object-fit:contain;">
            <div class="card-body text-center">
                <h5>Celana Pendek</h5>
                <h6 class="text-primary">Rp140.000</h6>
                <p>Celana pendek nyaman untuk aktivitas santai.</p>

                <a href="{{ url('/uts/pemesanan?produk=Celana Pendek') }}" class="btn btn-dark w-100">🛒 Beli Sekarang
                </a>

            </div>
        </div>
    </div>

</div>

@endsection