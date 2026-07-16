@extends('layouts.app')
@section('judul', 'Tentang')
@section('konten')

<div class="about-container">

    <div class="about-header">
        <h1>Tentang Kami</h1>
        <p>
            Selamat datang di <strong>TokoKu</strong>. Kami menyediakan berbagai produk
            berkualitas seperti elektronik, fashion, dan makanan dengan harga yang
            terjangkau.
        </p>
    </div>

    <div class="about-grid">

        <div class="about-card">
            <h2>Informasi Toko</h2>

            <ul>
                <li><strong>Nama Toko :</strong> TokoKu</li>
                <li><strong>Alamat :</strong> Jl. Kemana Saja No. 123, Makassar</li>
                <li><strong>Email :</strong> tokoku@email.com</li>
                <li><strong>Telepon :</strong> 0812-3456-7890</li>
            </ul>
        </div>

        <div class="about-card">
            <h2>Developer</h2>

            <p>
                Website ini dibuat menggunakan <strong>Laravel</strong> sebagai tugas
                pembuatan website sederhana dengan tampilan modern dan responsif.
            </p>
        </div>

    </div>

</div>

@endsection