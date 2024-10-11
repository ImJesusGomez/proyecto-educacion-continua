<?php

use Illuminate\Support\Facades\Route;
use App\Models\Constancia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function(){
  $constancias = Constancia::with('estudiante', 'curso', 'docente')->get();
  return $constancias;
});