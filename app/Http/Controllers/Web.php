<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Web; 

class Web extends Controller {
    public function home() {
        return "<h1>Ini adalah Controllers Web</h1>";
    }
    public function profil($nama) {
        return "<h2>Laman Profil ".$nama."</h2>";
    }

public function biodata() {
    $data['nama'] = 'Fensa Dwi Agustina'; 
    $data['alamat'] = 'Kediri'; 
    return view('biodata',$data); 
}

// menampilkan form perhitungan kalkulator
public function kalkulator() {
    $data['judul'] = 'Kalkulator Sederhana'; 
    $data['angka1'] = 0; 
    $data['angka2'] = 0; 
    $data['hasil'] = 0;
    return view('kalkulator',$data); 
}

// proses perkalian
public function proses(Request $request) {
    $data['judul'] = 'Kalkulator Sederhana'; 
    // menangkap input dari form
    $data['angka1']=$request->input('angka1'); 
    $data['angka2']=$request->input('angka2'); 
    // perkalian
    $data['hasil'] = $data['angka1'] * $data['angka2']; 
    // render ke view
    return view('kalkulator',$data); 
}
}