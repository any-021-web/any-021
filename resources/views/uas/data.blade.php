@extends('uas.layout')

@section('title','Data Menu')

@section('isi')

<h2 class="fw-bold mb-4">
    Data Menu
</h2>

<div class="card shadow">

    <div class="card-body">

        <div class="mb-3 text-end">

            <a href="{{ url('/uas/tambah') }}"
               class="btn btn-dark">

                Tambah Menu

            </a>

        </div>

        <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

                <tr>

                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($data as $item)

                <tr>

                    <td class="text-center">{{ $loop->iteration }}</td>

                    <td>{{ $item->nama }}</td>

                    <td>{{ $item->kategori }}</td>

                    <td>Rp {{ number_format($item->harga,0,',','.') }}</td>

                    <td class="text-center">{{ $item->stok }}</td>

                    <td class="text-center">

                        <a href="{{ url('/uas/edit/'.$item->id) }}"
                           class="btn btn-primary btn-sm">

                            Edit

                        </a>

                        <a href="{{ url('/uas/hapus/'.$item->id) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus menu ini?')">

                            Hapus

                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center">

                        Belum ada data menu.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection