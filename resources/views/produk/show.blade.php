@extends('layouts.app')

@section('judul', $produk['nama'])

@section('konten')

<div class="detail-produk">

    <div class="detail-card">

        <span class="kategori">
            {{ $produk['kategori'] }}
        </span>

        <h1>{{ $produk['nama'] }}</h1>

        <h2 class="harga">
            Rp {{ number_format($produk['harga'],0,',','.') }}
        </h2>

        <p class="deskripsi">
            {{ $produk['deskripsi'] }}
        </p>

        <p>
            <b>Stok :</b>

            @if($produk['stok'] > 0)
                <span class="tersedia">
                    {{ $produk['stok'] }} tersedia
                </span>
            @else
                <span class="habis">
                    Stok Habis
                </span>
            @endif
        </p>

        <a href="{{ route('produk.index') }}" class="btn-kembali">
            Kembali ke Produk
        </a>

    </div>

</div>

@endsection