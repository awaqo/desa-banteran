<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => fake()->title(),
            'slug' => fake()->title(),
            'konten' => fake()->text(),
            'gambar' => fake()->imageUrl(),
            'author' => fake()->name(),
        ];
    }
}
