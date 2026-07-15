@extends('layouts.app')

@section('judul', 'error')

@section('konten')

<div class="error-page">

    <div class="error-card">

        <h1>404</h1>
        <h2>Oops! Halaman Tidak Ditemukan</h2>
        <p>
            Maaf, halaman yang kamu cari tidak tersedia
            atau mungkin sudah dipindahkan.
        </p>
        <a href="{{ route('beranda') }}" class="btn-detail">
            Kembali ke Beranda
        </a>

    </div>

</div>

@endsection