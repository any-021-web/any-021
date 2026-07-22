@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="container py-4">

    <div class="text-center mb-5">

        <small class="text-uppercase fw-semibold text-secondary"
               style="letter-spacing:6px;">
            TUGAS AKHIR
        </small>

        <h1 class="display-3 fw-bold mb-2">
            PEMROGRAMAN WEB
        </h1>

        <span class="badge bg-dark px-4 py-2 rounded-pill">
            Universitas PGRI Ronggolawe Tuban
        </span>

    </div>

    <div class="card border-0 shadow-lg rounded-4 mb-5">

        <div class="card-header bg-dark text-white rounded-top-4">

            <h5 class="mb-0">

                <i class="bi bi-person-fill me-2"></i>
                ABOUT ME
            </h5>

        </div>

        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('images/ani.jpeg') }}"
                         class="img-fluid rounded-4 shadow"
                         style="width:180px;height:180px;object-fit:cover;">
                </div>

                <div class="col-md-7">
                    <table class="table table-borderless align-middle mb-0 fw-bold">

                        <tr>

                            <th width="180">

                                <i class="bi bi-person-square me-2"></i>
                                Nama
                            </th>
                            <td>:   Ani Rahmatika</td>

                        </tr>

                        <tr>

                            <th>

                                <i class="bi bi-card-text me-2"></i>
                                NPM
                            </th>
                            <td>:   1412240021</td>

                        </tr>

                        <tr>

                            <th>

                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Kelas
                            </th>
                            <td>:   TIF B 2024</td>
                        </tr>

                        <tr>

                            <th>

                                <i class="bi bi-bank me-2"></i>
                                Jurusan
                            </th>
                            <td>:   Teknik Informatika</td>
                        </tr>

                    </table>

                </div>
   
                <div class="col-md-2 text-center">

                    <i class="bi bi-mortarboard"
                       style="font-size:95px;color:#e9e9e9;"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="text-center mb-4">

        <h2 class="fw-bold">
            PORTAL WEB
        </h2>

    </div>

    <div class="row">

        <div class="col-lg-6 mb-4">

            <div class="card border-0 shadow-lg rounded-4 h-100">

                <div class="card-body p-4">

                    <div class="row align-items-center">

                        <div class="col-3 text-center">

                            <div class="rounded-circle bg-dark text-white d-flex justify-content-center align-items-center mx-auto"
                                 style="width:90px;height:90px;font-size:42px;">

                                👔

                            </div>

                        </div>

                        <div class="col-9">

                            <h3 class="fw-bold">

                                STYLE COWO GANTENG

                            </h3>

                            <span class="badge bg-dark">

                                Website UTS

                            </span>

                            <p class="text-muted mt-3">

                                Website katalog fashion pria modern yang
                                menampilkan berbagai produk pakaian pria.

                            </p>

                            <a href="/uts"
                               class="btn btn-dark px-4">

                                GO TO WEBSITE

                                <i class="bi bi-arrow-right ms-2"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <div class="card border-0 shadow-lg rounded-4 h-100">

                <div class="card-body p-4">

                    <div class="row align-items-center">

                        <div class="col-3 text-center">

                            <div class="rounded-circle bg-dark text-white d-flex justify-content-center align-items-center mx-auto"
                                 style="width:90px;height:90px;font-size:42px;">

                                ☕

                            </div>

                        </div>

                        <div class="col-9">

                            <h3 class="fw-bold">

                                BLACKCOFFEE

                            </h3>

                            <span class="badge bg-dark">

                                Website UAS

                            </span>

                            <p class="text-muted mt-3">

                                Sistem Informasi Menu Coffee untuk
                                mengelola data menu, harga, dan stok minuman.

                            </p>

                            <a href="/uas"
                               class="btn btn-dark px-4">

                                GO TO WEBSITE

                                <i class="bi bi-arrow-right ms-2"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="text-center mt-4 text-secondary">
        © 2026 | Tugas Akhir Pemrograman Web
    </div>

</div>

@endsection