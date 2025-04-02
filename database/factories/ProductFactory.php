<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $colors = ['rojo', 'verde', 'rosado', 'rosado2', 'negro', 'amarillo'];
        $sizes = ['S', 'M', 'L', 'XL'];
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'color' => fake()->randomElement($colors),
            'size' =>fake()->randomElement($sizes)
        ];
    }
}
