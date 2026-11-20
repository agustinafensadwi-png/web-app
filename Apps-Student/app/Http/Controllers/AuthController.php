<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_nama', $admin->nama);

            return redirect('/students');
        }

        return back()->with('error', 'Email atau password admin salah.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_id', 'admin_nama']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}