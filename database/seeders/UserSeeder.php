<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Tambahkan DB dan Hash untuk enkripsi password
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sisipkan data di tabel users
        DB::table('users')->insert([
            'nama' => 'Fensa Dwi Agustina',
            'email' => 'agustinafensadwi@mail.com',
            'password' => Hash::make('020806'),
            'foto' => '',
            'role' => 'admin',
        ]);
    }
}