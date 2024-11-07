<?php

use Illuminate\Support\Facades\Route;
use App\Models\Constancia;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/data', function(){
  $constancias = Constancia::with('estudiante', 'curso', 'docente')->get();
  return $constancias;
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
