<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function detail($harga)
    {
        // Menentukan nama produk berdasarkan harga atau parameter yang dikirim
        $listProduk = [
            '300.000' => 'Sepatu',
            '200.000' => 'Baju',
            '150.000' => 'Celana',
        ];

        $namaProduk = $listProduk[$harga] ?? 'Produk Tidak Ditemukan';

        return view('detail', compact('namaProduk', 'harga'));
    }

    public function about()
    {
        return view('about');
    }
}