<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBantuan>
 */
class DataBantuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'nik' => fake()->randomNumber(8),
            'alamat' => fake()->text(),
            'jenis_bantuan' => fake()->title(),
            'nominal' => fake()->randomNumber(6),
        ];
    }
}
