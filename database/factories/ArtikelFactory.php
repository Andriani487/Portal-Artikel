<?php

namespace Database\Factories;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Artikel>
 */
class ArtikelFactory extends Factory
{
    protected $model = Artikel::class;

    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(4),
            'isi' => fake()->paragraphs(3, true),
            'penulis' => fake()->name(),
        ];
    }
}
