<?php

namespace Modules\Notifications\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class NotificationsServiceProvider extends ServiceProvider
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
        // $this->registerFactories();
        // $this->loadMigrationsFrom(module_path('Notifications', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Notifications', 'Config/config.php') => config_path('notifications.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Notifications', 'Config/config.php'), 'notifications'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/notifications');

        $sourcePath = module_path('Notifications', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/';
        }, \Config::get('view.paths')), [$sourcePath]), 'notifications');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/notifications');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'notifications');
        } else {
            $this->loadTranslationsFrom(module_path('Notifications', 'Resources/lang'), 'notifications');
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
            app(Factory::class)->load(module_path('Notifications', 'Database/factories'));
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
