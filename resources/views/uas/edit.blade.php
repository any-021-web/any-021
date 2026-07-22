@extends('uas.layout')

@section('title','Edit Menu')

@section('isi')

<h2 class="fw-bold mb-4">

Edit Menu

</h2>

<div class="card shadow">

<div class="card-body">

<form action="{{ url('/uas/update/'.$data->id) }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama Menu</label>

<input type="text"
name="nama"
class="form-control"
value="{{ $data->nama }}">

</div>

<div class="mb-3">

<label>Kategori</label>

<select name="kategori"
class="form-select">

<option {{ $data->kategori=='Coffee'?'selected':'' }}>Coffee</option>

<option {{ $data->kategori=='Non Coffee'?'selected':'' }}>Non Coffee</option>

</select>

</div>

<div class="mb-3">

<label>Harga</label>

<input type="number"
name="harga"
class="form-control"
value="{{ $data->harga }}">

</div>

<div class="mb-3">

<label>Stok</label>

<input type="number"
name="stok"
class="form-control"
value="{{ $data->stok }}">

</div>

<button class="btn btn-dark">

Update

</button>

<a href="{{ url('/uas/data') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

@endsection