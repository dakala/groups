<?php

namespace Dajonems\Groups;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;


class GroupsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'groups');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/groups'),
        ]);

         // use this if your package needs a config file
         $this->publishes([
                 __DIR__.'/../config/config.php' => config_path('groups.php'),
         ], 'config');

        // use this if your package has migration files
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        // use this if your package has routes
        $this->setupRoutes($this->app->router);

    }

    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('groups', function ($app) {
            return new Groups($app);
        });

    }

    /**
     * Define the routes for the package.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Dajonems\Groups\Http\Controllers'], function ($router) {
            require __DIR__ . '/Http/routes.php';
        });
    }

}
