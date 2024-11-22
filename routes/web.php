<?php

use Illuminate\Support\Facades\Route;
use App\Models\Constancia;


Route::middleware('guest')->group(function () {
  Route::get('/home', function () {
    return view('welcome');
  })->name('inicio');

  Route::get('/', function () {
    return view('welcome');
  })->name('inicio');

  Route::get('/login-estudiante', function () {
    return view('estudiante-login');
  })->name('estudiante-login');

  Route::get('/login-docente', function () {
    return view('docente-login');
  })->name('docente-login');

  Route::get('/login-administrativo', function () {
    return view('administrativo-login');
  })->name('administrativo-login');
});



Route::get('/menu-estudiante', function () {
  return view('estudiante-dashboard');
})->name('estudiante-dashboard');

Route::get('/menu-docente', function () {
  return view('docente-dashboard');
})->name('docente-dashboard');

Route::get('/menu-administrativo', function () {
  return view('administrativo-dashboard');
})->name('administrativo-dashboard');



// Route::get('/menu-administrativo/estudiantes', function () {
//   return view('student');
// })->name('administrativo-estudiantes');

// Route::get('/menu-administrativo/estudiantes', function () {
//   return view('student');
// })->name('administrativo-estudiantes');
