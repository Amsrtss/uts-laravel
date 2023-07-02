@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="content">
                <h1>Welcome to our Website</h1>
                <p>SerbaAda adalah platform digital untuk memasarkan barang-barang lokal berkualitas.
                    Diantaranya ada kursi, meja, peralatan kantor, kertas, dan lain-lain.
                </p>
                <a href="#" class="btn btn-dark">Learn More</a>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="image-container">
                <img src="{{ asset('images/landing-image.jpg') }}" alt="Landing Image" width="500" height="500">
            </div>
        </div>
    </div>
</div>
</br>
</br>


<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Biodata Mahasiswa</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control" id="name" value="Amiratus S." readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" value="amiratus@gmail.com" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telepon:</label>
                                    <input type="text" class="form-control" id="phone" value="081234567890" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" value="Jl. Soekarno-Hatta, Surabaya" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="motto">Motto:</label>
                                    <input type="text" class="form-control" id="motto" value="Embrace the journey, trust the process" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="des">Deskripsi Singkat:</label>
                                    <input type="text" class="form-control" id="motto" value="Mahasiswa ITTelkom Surabaya" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="education">Pendidikan:</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">SMA IT Al Uswah Surabaya</li>
                                        <li class="list-group-item">Politeknik Elektronika Negeri Surabaya</li>
                                        <li class="list-group-item">Institut Teknologi Telkom Surabaya</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience">Pengalaman Projek:</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">Membuat Web Digilib dengan CRUD</li>
                                        <li class="list-group-item">Membuat Branding Sebuah Merk</li>
                                        <li class="list-group-item">Membuat Buku</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="skills">Kemampuan:</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">HTML</li>
                                        <li class="list-group-item">CSS</li>
                                        <li class="list-group-item">PHP</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interests">Hobi:</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">Membaca Buku, Novel, Komik, dan lain-lain</li>
                                        <li class="list-group-item">Bermain Valorant</li>
                                        <li class="list-group-item">Bermain Game Lainnya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
