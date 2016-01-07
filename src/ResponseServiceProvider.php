<?php namespace Vanadium\Providers;

use Illuminate\Support\ServiceProvider;
use JeyKeu\Response\Response;

class ResponseServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ajaxResponse', function ( ) {
            return new Response();
        });

        $this->app->alias('ajaxResponse', 'JeyKeu\Response\Response');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ajaxResponse', 'JeyKeu\Response\Response'];
    }
}
