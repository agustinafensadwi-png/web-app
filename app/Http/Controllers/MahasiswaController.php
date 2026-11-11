<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data list mahasiswa sesuai soal
        $mahasiswa = [
            ['nama' => 'Nadine', 'alamat' => 'Kediri', 'gender' => 'P'],
            ['nama' => 'Titania', 'alamat' => 'Nganjuk', 'gender' => 'P'],
            ['nama' => 'Dio', 'alamat' => 'Malang', 'gender' => 'L'],
            ['nama' => 'Tian', 'alamat' => 'Nganjuk', 'gender' => 'L'],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}