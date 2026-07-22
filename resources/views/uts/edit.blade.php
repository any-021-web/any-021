@extends('uts.layout')

@section('title','Edit Pemesanan')

@section('isi')

<div class="card shadow">

    <div class="card-header bg-dark text-white">

        <h3 class="text-center mb-0">

            EDIT PEMESANAN

        </h3>

    </div>

    <div class="card-body">

        <form action="{{ url('/uts/update/'.$data->id) }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Pembeli</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $data->nama }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       value="{{ $data->no_hp }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Pemesanan</label>
                <input type="date"
                       name="tanggal"
                       class="form-control"
                       value="{{ $data->tanggal }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Pengiriman</label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="3">{{ $data->alamat }}</textarea>

            </div>

            <div class="mb-3">
                <label class="form-label">Produk</label>

                <input
                    type="text"
                    name="produk"
                    class="form-control"
                    value="{{ $data->produk }}"
                    readonly>

            </div>

            <div class="mb-3">

                <label class="form-label">Ukuran</label>

                <select name="ukuran" class="form-select">

                    <option value="S" {{ $data->ukuran=='S' ? 'selected' : '' }}>S</option>

                    <option value="M" {{ $data->ukuran=='M' ? 'selected' : '' }}>M</option>

                    <option value="L" {{ $data->ukuran=='L' ? 'selected' : '' }}>L</option>

                    <option value="XL" {{ $data->ukuran=='XL' ? 'selected' : '' }}>XL</option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">Jumlah Pesanan</label>

                <input
                    type="number"
                    name="jumlah"
                    class="form-control"
                    value="{{ $data->jumlah }}">

            </div>

            <div class="mb-3">

                <label class="form-label">Metode Pembayaran</label>

                <div class="form-check">

                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="COD"
                           {{ $data->pembayaran=='COD' ? 'checked' : '' }}>

                    <label class="form-check-label">
                        COD
                    </label>

                </div>

                <div class="form-check">

                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="Transfer Bank"
                           {{ $data->pembayaran=='Transfer Bank' ? 'checked' : '' }}>

                    <label class="form-check-label">
                        Transfer Bank
                    </label>

                </div>

                <div class="form-check">

                    <input class="form-check-input"
                           type="radio"
                           name="pembayaran"
                           value="E-Wallet"
                           {{ $data->pembayaran=='E-Wallet' ? 'checked' : '' }}>

                    <label class="form-check-label">
                        E-Wallet
                    </label>

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Catatan

                </label>

                <textarea
                    name="catatan"
                    class="form-control"
                    rows="3">{{ $data->catatan }}</textarea>

            </div>

            <button
                type="submit"
                class="btn btn-dark">

                Simpan Perubahan

            </button>

        </form>

    </div>

</div>

@endsection