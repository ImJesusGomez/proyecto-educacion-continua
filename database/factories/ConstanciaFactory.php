<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Constancia>
 */
class ConstanciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calificacion'=>fake()->randomFloat(1,0,10),
            'fecha'=>fake()->date(),
            'estudiante_id'=>fake()->numberBetween(1,50),
            'curso_id'=>fake()->numberBetween(1,50),
            'docente_id'=>fake()->numberBetween(1,50),
        ];
    }
}
