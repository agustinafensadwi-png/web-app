<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
// Load DB dan Faker
use Illuminate\Support\Facades\DB;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jalankan Faker untuk generate 10 data employe
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('employes')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->cityName,
                'gender' => $faker->randomElement(['L', 'P']),
                'gaji' => $faker->randomElement([100000, 80000, 250000]),
            ]);
        }
    }
}