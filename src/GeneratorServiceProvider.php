<?php

namespace Tck\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FooCommand::class,
            ]);
        }
    }

    /**
     *
     */
    public function register()
    {
        //
    }
}