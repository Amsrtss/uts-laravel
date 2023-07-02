@extends('layouts.app')
@section('content')
<div class="container-sm my-5">
<div class="row justify-content-center">
<div class="p-5 bg-light rounded-3 col-xl-4 border">
<div class="mb-3 text-center">
<i class="bi-person-circle fs-1"></i>
<h4>Detail Product</h4>
</div>
<hr>
<div class="row">
<div class="col-md-12 mb-3">
<label for="kodeBarang" class="form-label">Kode Barang</label>
<h5>{{ $product->kodebarang }}</h5>
</div>
<div class="row">
<div class="col-md-12 mb-3">
<label for="namaBarang" class="form-label">Nama Barang</label>
<h5>{{ $product->namabarang }}</h5>
</div>
<div class="col-md-12 mb-3">
<label for="hargaBarang" class="form-label">Harga Barang</label>
<h5>{{ $product->hargabarang }}</h5>
</div>
<div class="col-md-12 mb-3">
<label for="deskripsi"
class="form-label">Description</label>
<h5>{{ $product->deskripsi }}</h5>
</div>
<div class="col-md-12 mb-3">
<label for="unit"
class="form-label">Satuan</label>
<h5>{{ $product->unit->name}}</h5>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12 d-grid">
<a href="{{ route('products.index') }}"
class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle
me-2"></i> Back</a>
</div>
</div>
</div>
</div>
</div>
@endsection
