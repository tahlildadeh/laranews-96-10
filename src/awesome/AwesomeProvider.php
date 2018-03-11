<?php

namespace Awesome;

use Illuminate\Support\ServiceProvider;

class AwesomeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Awesome::class, function() {
           return new Awesome('token', 5);
        });
        $this->app->singleton('abcdefg', function() {
            $stdClass = new \stdClass();
            $stdClass->rand = mt_rand(100, 999);
           return $stdClass;
        });
    }
}
