<?php

namespace Rcborinaga\Products;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();

        $migration_filename = date('Y_m_d_His', time()) . '_create_rcborinaga_products_table.php'; 

        if ($this->app->runningInConsole()) {

            if (! class_exists('CreateProductsTable')) {
                
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_rcborinaga_products_table.php.stub' => database_path('migrations/' . $migration_filename),
                ], 'migrations');

            }

        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config'    => config_path('/')
        ], 'config');

        
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'../../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'middleware' => ['web'],
        ];
    }

}
