<div class="produk-card">

    <div class="kategori">
        {{ $produk['kategori'] }}
    </div>

    <h3>{{ $produk['nama'] }}</h3>

    <div class="harga">
        Rp {{ number_format($produk['harga'],0,',','.') }}
    </div>

    @if($produk['stok'] == 0)

        <span class="badge habis">
            Stok Habis
        </span>

        <button class="btn-disabled" disabled>
            Tidak Tersedia
        </button>

    @else
        <span class="badge tersedia">
            Stok : {{ $produk['stok'] }}
        </span>

        <a href="{{ route('produk.show',$produk['id']) }}" class="btn-detail">
            Lihat Detail
        </a>
    @endif

</div>