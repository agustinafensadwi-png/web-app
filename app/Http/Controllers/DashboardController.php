<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor sit amet';

        return view('home', $data);
    }

    public function gallery()
    {
        $data['judul'] = 'Laman Gallery';

        return view('gallery', $data);
    }

    public function product()
    {
        $data['judul'] = 'Laman Product';

        return view('product', $data);
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
        $data['judul'] = 'Laman About';

        return view('about', $data);
    }

    public function index()
    {
        $data['judul'] = 'Laman Dashboard';
        $data['isi'] = 'Selamat datang di halaman dashboard.';

        return view('dashboard', $data);
    }
}