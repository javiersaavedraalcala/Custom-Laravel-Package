<?php

namespace JavierSaavedra\CustomPackage;

use Illuminate\Support\ServiceProvider;

class CustomPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->loadRoutesFrom($this->basePath('routes/web.php'));

        // This line is for load views in our custom package
        $this->loadViewsFrom(
            $this->basePath('resources/views'), 
            'custom-package'
        );

        // This line is for load migrations in Laravel app data base
        $this->loadMigrationsFrom(
            $this->basePath('database/migrations')
        );

        // This line is for load lang files to make translations work
        $this->loadTranslationsFrom(
            $this->basePath('resources/lang'),
            'custom-package'
        );

        // This line is for publish package's migrations in laravel project /database/migrations/ and can be edited by final user without modify the package
        $this->publishes([
            $this->basePath('database/migrations') => database_path('migrations')
        ], 'custom-package-migrations');
        
        // This line is for publish package's views in laravel project /resources/views/vendor/ and can be edited by final user without modify the package
        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/custom-package')
        ], 'custom-packages-views');

        // This line is for publish our package config in laravel project and in this way can modify the package config from laravel project in /config/ 
        $this->publishes([
            $this->basePath('config/custom-package.php') => base_path('config/custom-package.php')
        ], 'custom-package-config');

        // This line is for publish package's lang files in laravel project /lang/
        $this->publishes([
            $this->basePath('resources/lang') => base_path('lang/vendor/custom-package')
        ], 'custom-package-translations');

        // This line is for publish assets in laravel project and these can be modified from laravel project
        $this->publishes([
            $this->basePath('resources/static') => public_path('vendor/custom-package')
        ], 'custom-package-assets');
    }

    public function register()
    {
        // This line is for register our custom package service on service container
        $this->app->bind('custom-package', function () {
            return new Hello;
        });

        // This line is for add our package config data to general config
        $this->mergeConfigFrom(
            $this->basePath('config/custom-package.php'),
            'custom-package'
        );
    }

    public function basePath($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}
