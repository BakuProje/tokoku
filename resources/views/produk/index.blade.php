@extends('layouts.app')

@section('judul','Produk')

@section('konten')

<div class="produk-header">
    <h1>Semua Produk</h1>
    <p>Temukan berbagai produk terbaik dari TokoKu.</p>
</div>

<div class="produk-grid">

    @foreach($produk as $p)
        <x-kartu-produk :produk="$p"/>
    @endforeach

</div>

@endsection