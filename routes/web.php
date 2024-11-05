<?php

use App\Livewire\Auth\EstudianteLogin;
use Illuminate\Support\Facades\Route;
use App\Models\Constancia;


Route::middleware("guest")->group(function (){
  Route::get('/login-estudiante', function(){
    return view('livewire.auth.estudiante-login');
  })->name('estudiante-login');
});

Route::middleware("auth")->group(function (){ 
  Route::get('/menu-estudiante', function(){
    return view('livewire.estudiante.estudiante-dashboard');
  })->name('estudiante-dashboard');
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/data', function(){
//   $constancias = Constancia::with('estudiante', 'curso', 'docente')->get();
//   return $constancias;
// });
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
