@extends('uts.layout')

@section('title','Data Pemesanan')

@section('isi')

<h2 class="text-center fw-bold mb-4">
    DATA PEMESANAN
</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive">

<table class="table table-bordered table-hover align-middle">

    <thead class="table-dark text-center">

        <tr>

            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Tanggal</th>
            <th>Produk</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Pembayaran</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

    @forelse($data as $item)

        <tr>

            <td class="text-center">{{ $loop->iteration }}</td>

            <td>{{ $item->nama }}</td>

            <td>{{ $item->no_hp }}</td>

            <td>{{ $item->tanggal }}</td>

            <td>{{ $item->produk }}</td>

            <td class="text-center">{{ $item->ukuran }}</td>

            <td class="text-center">{{ $item->jumlah }}</td>

            <td>{{ $item->pembayaran }}</td>

            <td class="text-center">

<a href="{{ url('/uts/edit/'.$item->id) }}"
   class="btn btn-primary btn-sm">
    Edit
</a>
               <a href="{{ url('/uts/hapus/'.$item->id) }}"
   class="btn btn-danger btn-sm"
   onclick="return confirm('Yakin ingin menghapus data ini?')">
    Hapus
</a>

            </td>

        </tr>

    @empty

        <tr>

            <td colspan="9" class="text-center">

                Belum ada data pemesanan.

            </td>

        </tr>

    @endforelse

    </tbody>

</table>

</div>

@endsection