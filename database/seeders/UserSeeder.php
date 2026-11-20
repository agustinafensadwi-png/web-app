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
            'nama' => 'Rudy Eko',
            'email' => 'rudyekoprasetya@mail.com',
            'password' => Hash::make('123456'),
            'foto' => '',
            'role' => 'admin',
        ]);
    }
}