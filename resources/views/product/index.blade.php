@extends('layouts.app')
@section('content')
<div class="container mt-4">
<div class="row mb-0">
<div class="col-lg-9 col-xl-10">
<h4 class="mb-3">{{ $pageTitle }}</h4>
</div>
<div class="col-lg-3 col-xl-2">
<div class="d-grid gap-2">
<a href="{{ route('products.create') }}" class="btn
btn-dark"><i class="bi bi-cart4 me-2"></i>Create Product</a>
</div>
</div>
</div>
<hr>
<div class="table-responsive border p-3 rounded-3">
<table class="table table-bordered table-hover table-striped
mb-0 bg-white">
<thead>
<tr>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Harga Barang</th>
<th>Deskripsi Barang</th>
<th>Satuan Barang</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($products as $product)
<tr>
<td>{{ $product->kodebarang }}</td>
<td>{{ $product->namabarang }}</td>
<td>{{ $product->hargabarang }}</td>
<td>{{ $product->deskripsi }}</td>
<td>{{ $product->unit->name }}</td>
<td>@include('product.actions')</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
