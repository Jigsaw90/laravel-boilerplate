<?php
declare(strict_types=1);

namespace Jigsaw\Boilerplate;

use Illuminate\Support\ServiceProvider;

/**
 * Class BoilerplateServiceProvider
 * @author   Marcin Gierus <marcin.gierus@monogo.pl>
 * @package  Jigsaw\Boilerplate
 */
class BoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'boilerplate');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'boilerplate');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/config.php' => config_path('boilerplate.php'),
                ], 'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../pint/pint.json' => base_path('pint.json'),
                ],'pint'
            );

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/boilerplate'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/boilerplate'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/boilerplate'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'boilerplate');

        // Register the main class to use with the facade
        $this->app->singleton('boilerplate', function () {
            return new Boilerplate;
        });
    }
}
