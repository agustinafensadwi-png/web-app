<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numerify('24########'),
            'nama' => fake()->name(),
            'prodi' => fake()->randomElement(['Sistem Informasi', 'Teknik Informatika', 'Teknik Mesin']),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}