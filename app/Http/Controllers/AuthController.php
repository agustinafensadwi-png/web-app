<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $data = User::where('email', $request->email)->first();

        if ($data && Hash::check($request->password, $data->password)) {
            $request->session()->regenerate();

            session([
                'user_id' => $data->id,
                'email' => $data->email,
                'logged_in' => true,
            ]);

            return redirect('/dashboard');
        }

        return redirect('/login')->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/login');
    }
}