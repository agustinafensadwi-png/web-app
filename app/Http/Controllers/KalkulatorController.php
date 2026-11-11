<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Menampilkan halaman kalkulator awal
    public function home()
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('kalkulator', $data);
    }

    // Memproses perhitungan ketika tombol HITUNG diklik
    public function proses(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        
        // Contoh perhitungan perkalian (sesuai simbol 'x' di view Anda)
        $hasil = $angka1 * $angka2;

        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = $angka1;
        $data['angka2'] = $angka2;
        $data['hasil'] = $hasil;

        return view('kalkulator', $data);
    }
}