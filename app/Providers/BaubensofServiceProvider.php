<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BaubensofServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

         view()->composer(['layouts.footer', 
                          'layouts.navbar'], function ($view) {
            $informacion = \App\Informacion::first();
            //$caracteres = array("(", ")", "-", " ", "+");
            //$numeroWs = str_replace($caracteres, "", $informacion->whatsapp);

            $view->with(compact('informacion'));
        });
/*
         view()->composer(['app'], function ($view) {
            $pagos    = \App\Pago::where('estado', 1)->get();
            $familias = \App\Familia::orderBy('orden', 'asc')->get();
            $view->with(compact('pagos', 'familias'));
        });*/

        view()->composer(['layouts.adm.sidebar', 'auth.login', 'layouts.navbar'], function ($view) {
            $logos    = \App\Logo::where('ubicacion', 'navbar')->first();
            $view->with(compact('logos'));
        });

        view()->composer(['layouts.footer'], function ($view) {
            $logos    = \App\Logo::where('ubicacion', 'footer')->first();
            $view->with(compact('logos'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
