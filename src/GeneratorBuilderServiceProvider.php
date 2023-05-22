<?php

namespace YusufTogtay\GeneratorBuilder;

use Illuminate\Support\ServiceProvider;
use YusufTogtay\GeneratorBuilder\Commands\GeneratorBuilderRoutesPublisherCommand;

class GeneratorBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/generator_builder.php';

        $this->publishes([
            $configPath => config_path('yusuftogtay/generator_builder.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../views/', 'generator-builder');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('yusuftogtay.publish.generator-builder', function ($app) {
            return new GeneratorBuilderRoutesPublisherCommand();
        });

        $this->commands([
            'yusuftogtay.publish.generator-builder',
        ]);
    }
}
