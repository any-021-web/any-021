@extends('uas.layout')

@section('title','Tambah Menu')

@section('isi')

<h2 class="fw-bold mb-4">

    Tambah Menu

</h2>

<div class="card shadow">

<div class="card-body">

<form action="{{ url('/uas/simpan') }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama Menu</label>

<input type="text"
name="nama"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Kategori</label>

<select name="kategori"
class="form-select">

<option>Coffee</option>

<option>Non Coffee</option>

</select>

</div>

<div class="mb-3">

<label>Harga</label>

<input type="number"
name="harga"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Stok</label>

<input type="number"
name="stok"
class="form-control"
required>

</div>

<button class="btn btn-dark">

Simpan

</button>

<a href="{{ url('/uas/data') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

@endsection