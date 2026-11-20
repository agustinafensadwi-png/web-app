<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class Web extends Controller
{
    public function home()
    {
        return "<h1>Ini adalah Controllers Web</h1>";
    }

    public function profil($nama)
    {
        return "<h2>Laman Profil " . $nama . "</h2>";
    }

    public function biodata()
    {
        $data['nama'] = 'Fensa Dwi Agustina';
        $data['alamat'] = 'Kediri';

        return view('biodata', $data);
    }

    // Menampilkan form perhitungan kalkulator
    public function kalkulator()
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;

        return view('kalkulator', $data);
    }

    // Proses perkalian
    public function proses(Request $request)
    {
        $data['judul'] = 'Kalkulator Sederhana';
        // Menangkap input dari form
        $data['angka1'] = $request->input('angka1');
        $data['angka2'] = $request->input('angka2');
        // Perkalian
        $data['hasil'] = $data['angka1'] * $data['angka2'];

        // Render ke view
        return view('kalkulator', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah data Pegawai';

        return view('tambah_data', $data);
    }

    public function store(Request $request)
    {
        // Ambil data di form
        $employe = new Employe;
        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;

        // Simpan dalam database
        $employe->save();

        // Jika berhasil kembali ke tampil data
        return redirect('/employe');
    }
}

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Primary key id auto-increment
            $table->id();

            // Field nama tipe varchar(100)
            $table->string('nama', 100);

            // Field email varchar(100) unik
            $table->string('email', 100)->unique();

            // Field password tipe varchar(100)
            $table->string('password', 100);

            // Field foto tipe tinytext
            $table->tinyText('foto');

            // Field role tipe enum('admin', 'user')
            $table->enum('role', ['admin', 'user']);

            // Field created_at dan updated_at tipe timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}