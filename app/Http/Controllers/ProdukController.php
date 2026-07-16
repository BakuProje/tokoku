<?php

namespace App\Http\Controllers;

use App\Data\ProdukData;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = ProdukData::semua();
        return view('produk.index', compact('produk'));
    }

    public function show($id){
        $produk = ProdukData::ProdukId($id);

        if (!$produk) {
            abort(404);
        }

        $terkait = array_slice(
            array_filter(
                ProdukData::perKategori($produk['slug_kategori']),
                fn($item) => $item['id'] != $id
            ),0,3
        );

        return view('produk.show', compact('produk', 'terkait'));
    }
}