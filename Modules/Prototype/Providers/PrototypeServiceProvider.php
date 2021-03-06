<?php

namespace Modules\Prototype\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class PrototypeServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Prototype', 'Database/Migrations'));

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Modules\Prototype\Console\GenerateRouteForJs::class,
            ]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {   
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(DummyContentServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Prototype', 'Config/config.php') => config_path('prototype.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Prototype', 'Config/config.php'), 'prototype'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/prototype');

        $sourcePath = module_path('Prototype', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/';
        }, \Config::get('view.paths')), [$sourcePath]), 'prototype');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/prototype');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'prototype');
        } else {
            $this->loadTranslationsFrom(module_path('Prototype', 'Resources/lang'), 'prototype');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('Prototype', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
