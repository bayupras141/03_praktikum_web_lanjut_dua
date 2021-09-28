<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function edu_games(){
        $data_produk = \App\Models\Produk::all();
        return view('product.edu-games', ['data_produk' => $data_produk]);
    }

    public function kids_games(){
        $data_produk = \App\Models\Produk::all();
        return view('product.kid-games', ['data_produk' => $data_produk]);
    }
}
