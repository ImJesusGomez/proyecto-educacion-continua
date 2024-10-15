<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Constancia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function(){
  $constancias = Constancia::with('estudiante', 'curso', 'docente')->get();
  return $constancias;
});


Route::middleware('guest')->group(function() {
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});

Route::middleware('auth')->group(function(){
  Route::get('/home', [AuthController::class, 'home'])->name('home');
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});