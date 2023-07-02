@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Product</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kodeBarang') is-invalid @enderror" type="text"
                                name="kodeBarang" id="kodeBarang" value="{{ old('kodeBarang') }}"
                                placeholder="Enter Kode Barang">
                            @error('kodeBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang') is-invalid @enderror" type="text"
                                name="namaBarang" id="namaBarang" value="{{ old('namaBarang') }}"
                                placeholder="Enter Nama Barang">
                            @error('namaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text"
                                name="hargaBarang" id="hargaBarang" value="{{ old('hargaBarang') }}"
                                placeholder="Enter Harga Barang">
                            @error('hargaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('deskripsi') is-invalid @enderror" type="text"
                                name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}"
                                placeholder="Enter deskripsi">
                            @error('deskripsi')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="unit" class="form-label">Satuan</label>
                            <select name="unit" id="unit" class="form-select">
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->
                                        code.' - '.$unit->name }}</option>
                                @endforeach
                            </select>
                            @error('unit')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('products.index') }}"
                                class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle
                            me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
