<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Constancia;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Curso;
use App\Models\Recibo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        
        Administrator::factory()->create([
          'username' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => '12345',
        ]);


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
