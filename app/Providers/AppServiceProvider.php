<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('layouts.login', 'login-layout');
        Blade::component('layouts.menu', 'menu-layout');

        // Este código hace que la variable $docente esté disponible en todas las vistas donde el estudiante este autenticado
        View::composer('*', function ($view) {
          $view->with('docente', Auth::guard('docentes')->user());
        });
    }
}
