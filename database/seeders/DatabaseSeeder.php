<?php

namespace Database\Seeders;

use App\Models\Administrativo;
use App\Models\Constancia;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Curso;
use App\Models\Recibo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpParser\Comment\Doc;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        Estudiante::factory(50)->create();
        Docente::factory(50)->create();
        Recibo::factory(50)->create();
        Curso::factory(50)->create();
        Constancia::factory(50)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Administrativo::factory()->create([
            'name' => 'admin',
            'password' => 'qwerty123',
        ]);

        // Administrativo::factory()->create([
        //     'name' => 'admin',
        //     'password' => Hash::make('qwerty123'), // Encripta la contraseña manualmente
        // ]);

        Estudiante::factory()->create([
            'nombre' => 'Jorge Eduardo del Carmen Rodríguez',
            'expediente' => '319824',
            'nip' => '12345678',
        ]);

        Docente::factory()->create([
            'nombre' => 'Jorge Dennis Correa Tepetate',
            'expediente' => '291961',
            'nip' => '12345678',
        ]);
        Docente::factory()->create([
            'nombre' => 'Prueba Docente',
            'expediente' => '123456',
            'nip' => '12345678',
        ]);

        Curso::factory()->create([
            'nombre'=>'Taller del Roger',
            'cupo_max'=>20,
            'horario'=>fake()->dateTime(),
            'link'=>'https://www.JoseJose.com',
            'duracion'=> 40,
            'fecha_inicio'=>fake()->date(),
            'fecha_fin'=>fake()->date(),
            'descripcion'=>'texto bien random',
            'docente_id'=>51
        ]);
    }
}
