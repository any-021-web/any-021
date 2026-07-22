@extends('uts.layout')

@section('title','Form Pemesanan')

@section('isi')

<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-0 text-center">FORM PEMESANAN</h3>
    </div>

    <div class="card-body">

        <form action="{{ url('/uts/pemesanan') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Pembeli</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Pemesanan</label>
                <input type="date"
                       name="tanggal"
                       class="form-control"
                       value="{{ date('Y-m-d') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Pengiriman</label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="3"
                    required></textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Produk Yang Dipilih
                </label>

                <input type="text"
                       name="produk"
                       class="form-control"
                       value="{{ $produk }}"
                       readonly>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Ukuran
                </label>

                <select
                    name="ukuran"
                    class="form-select">

                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Jumlah Pesanan
                </label>

                <input type="number"
                       name="jumlah"
                       value="1"
                       min="1"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Metode Pembayaran
                </label>

                <div class="form-check">
                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="COD"
                           required>

                    <label class="form-check-label">
                        COD
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="Transfer Bank">

                    <label class="form-check-label">
                        Transfer Bank
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="E-Wallet">

                    <label class="form-check-label">
                        E-Wallet
                    </label>
                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Catatan Untuk Penjual
                </label>

                <textarea
                    name="catatan"
                    class="form-control"
                    rows="3"></textarea>

            </div>

            <div class="form-check mb-4">

                <input class="form-check-input"
                       type="checkbox"
                       required>

                <label class="form-check-label">

                    Saya menyatakan data pemesanan yang saya isi sudah benar.

                </label>

            </div>

            <button
                type="submit"
                class="btn btn-dark w-100">

                Simpan Pemesanan

            </button>

        </form>

    </div>
</div>

@endsection