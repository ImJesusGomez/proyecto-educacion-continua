<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre'=>fake()->catchPhrase(),
            'cupo_max'=>fake()->numberBetween(10,40),
            'horario' => fake()->date(), 
            'link'=>fake()->url(),
            'duracion'=>fake()->numberBetween(30, 50),
            'fecha_inicio' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'fecha_fin'=>fake()->dateTimeBetween('+12 week', '+15 week'),
            'descripcion'=>fake()->paragraph(),
            'docente_id'=>fake()->numberBetween(1, 50),
        ];
    }
}
