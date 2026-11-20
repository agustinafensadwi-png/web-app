<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['judul'] = 'CRUD data Admin';
        $data['admins'] = Admin::all();

        return view('admin.tampil_data', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah data Admin';

        return view('admin.tambah_data', $data);
    }

    public function store(Request $request)
    {
        $admin = new Admin;
        if ($request->filled('id_admin')) {
            $admin->id_admin = $request->id_admin;
        }
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect('/admin');
    }

    public function show(Admin $admin)
    {
        $data['judul'] = 'Edit data Admin';
        $data['admin'] = $admin;

        return view('admin.edit_data', $data);
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->username = $request->username;
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        return redirect('/admin');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('/admin');
    }
}