@extends('uas.layout')

@section('title','Dashboard')

@section('isi')

<div class="container-fluid">

    <h2 class="fw-bold mb-1 text-dark">
        Dashboard BLACKCOFFEE
    </h2>

    <p class="text-muted mb-4">
        Selamat datang di Sistem Informasi Menu BLACKCOFFEE.
    </p>

    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow text-white"
                 style="background:linear-gradient(135deg,#111,#2c2c2c); border-radius:15px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h6>Total Menu</h6>

                            <h1 class="fw-bold">
                                {{ $totalMenu }}
                            </h1>

                        </div>

                        <i class="bi bi-cup-hot-fill fs-1"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow text-white"
                 style="background:linear-gradient(135deg,#1d1d1d,#3a3a3a); border-radius:15px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h6>Total Stok</h6>

                            <h1 class="fw-bold">
                                {{ $totalStok }}
                            </h1>

                        </div>

                        <i class="bi bi-box-seam-fill fs-1"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow text-white"
                 style="background:linear-gradient(135deg,#2b2b2b,#555); border-radius:15px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h6>Rata-rata Harga</h6>

                            <h4 class="fw-bold">
                                Rp {{ number_format($rataHarga,0,',','.') }}
                            </h4>

                        </div>

                        <i class="bi bi-cash-stack fs-1"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow text-white"
                 style="background:linear-gradient(135deg,#444,#000); border-radius:15px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h6>Menu Termahal</h6>

                            <h5 class="fw-bold">

                                @if($menuTermahal)

                                    {{ $menuTermahal->nama }}

                                @else

                                    -

                                @endif

                            </h5>

                        </div>

                        <i class="bi bi-award-fill fs-1"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-8">

            <div class="card border-0 shadow">

                <div class="card-header text-white"
                     style="background:#111;">

                    <i class="bi bi-clock-history me-2"></i>

                    Menu Terbaru

                </div>

                <div class="card-body">

                    <table class="table table-hover align-middle">

                        <thead class="table-dark">

                            <tr>

                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>

                            </tr>

                        </thead>

                        <tbody>

                        @forelse($menuTerbaru as $item)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $item->nama }}</td>

                                <td>{{ $item->kategori }}</td>

                                <td>
                                    Rp {{ number_format($item->harga,0,',','.') }}
                                </td>

                                <td>{{ $item->stok }}</td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5" class="text-center">

                                    Belum ada data menu.

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow">

                <div class="card-header text-white"
                     style="background:#111;">

                    <i class="bi bi-lightning-charge-fill me-2"></i>

                    Aksi Cepat

                </div>

                <div class="card-body">

                    <div class="d-grid gap-3">

                        <a href="{{ url('/uas/tambah') }}"
                           class="btn text-white"
                           style="background:#111;">

                            <i class="bi bi-plus-circle-fill me-2"></i>

                            Tambah Menu

                        </a>
                        
                        
                        <a href="{{ url('/uas/data') }}"
                           class="btn btn-outline-dark">

                            <i class="bi bi-list-ul me-2"></i>

                            Kelola Data Menu

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection