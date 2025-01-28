<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'status' => fake()->randomElement(['Em Andamento', 'Pendente', 'Concluído']),
            'description' => fake()->realText(315),
            'start_date' => fake()->date(),
            'created_by' => fake()->numberBetween(1, 2),
        ];
    }
}
