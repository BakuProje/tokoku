@extends('layouts.app')
@section('judul', 'Beranda')
@section('konten')

<section class="home">
    <div class="home-content">

        <h1>Selamat Datang di <b>TokoKu</b></h1>

        <p>
            Temukan produk berkualitas dengan mudah,
            cepat, dan terpercaya.
        </p>

        <a href="{{ route('produk.index') }}" class="home-btn">
            Mulai Belanja
        </a>

    </div>
</section>




@endsection