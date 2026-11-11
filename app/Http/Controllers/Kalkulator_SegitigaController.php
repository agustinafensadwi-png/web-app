<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kalkulator_SegitigaController extends Controller
{
    public function segitiga()
    {
        $alas = 10;
        $tinggi = 14;
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', compact('alas', 'tinggi', 'luas'));
    }
}