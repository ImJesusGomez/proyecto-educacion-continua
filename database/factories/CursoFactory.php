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
            'horario' => fake()->dateTimeBetween('next Monday', 'next Sunday')->setTime(fake()->numberBetween(9, 17), fake()->numberBetween(0, 59))->format('l H:i'), 
            'link'=>fake()->url(),
            'duracion'=>fake()->dateTimeBetween('now','+3 month'),
            'fecha_inicio' => fake()->date(),
            'fecha_fin'=>fake()->date(),
            'descricion'=>fake()->paragraph(),
        ];
    }
}
