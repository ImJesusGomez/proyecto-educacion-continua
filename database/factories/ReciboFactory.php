<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recibo>
 */
class ReciboFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'folio'=>fake()->numberBetween(100000,999999),
            'fecha_vencimiento'=>fake()->date(),
            'monto'=>fake()->randomFloat(2,5,8),
            'referencia_1'=>fake()->numberBetween(10000000,99999999),
            'referencia_2'=>fake()->numberBetween(10000,99999),
            'estudiante_id'=>fake()->numberBetween(1,50),
        ];
    }
}
