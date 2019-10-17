<?php

namespace App\Providers;

//He añadido esta ruta para arreglar un problema
use Illuminate\Support\Facades\Schema;//////////
//He añadido esta ruta para arreglar un problema
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
