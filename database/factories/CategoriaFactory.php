<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = fake()->dateTimeBetween('-5 years');
        return [
            "descripcion" => fake()->sentence,
            
        ];
       
    }
}
