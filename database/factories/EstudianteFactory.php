<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\password;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'expediente' => fake()->numberBetween(100000, 999999),
            'carrera' => fake()->randomElement([
                'Licenciatura en Informática',
                'Licenciatura en Administración de las T.I.',
                'Ingeniería de Software',
                'Ingeniería en Computación',
                'Ingeniería en Telecomunicaciones y Redes',
                'Ingeniería en Ciencia y Analítica de Datos',
                'Ingeniería en Tecnologías de Información y Ciberseguridad'
            ]),
            'semestre' => fake()->numberBetween(1, 9),
            'nip' => fake()->password(10, 10),
            'correo' => fake()->email()
        ];
    }
}
