<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        session_start();
        if(isset($_SESSION['producto_compra'])){
            $carrito = $_SESSION['producto_compra'];
            view()->share('carrito', $carrito);

        }

    }
}
