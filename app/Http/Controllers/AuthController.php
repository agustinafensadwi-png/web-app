<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Fungsi untuk login
    public function cek(Request $request)
    {
        // Mencari data email di tabel users
        $data = User::where('email', $request->email)->firstOrFail();

        // Jika datanya ketemu
        if ($data) {
            // Cek apakah password sama
            if (Hash::check($request->password, $data->password)) {
                // Simpan session
                session([
                    'email' => $request->email,
                    'logged_in' => true,
                ]);

                // Masuk ke dashboard
                return redirect('/dashboard');
            }

            // Kembali ke login jika password salah
            return redirect('/');
        }

        // Kembali ke login jika data tidak ditemukan
        return redirect('/');
    }
}