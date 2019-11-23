<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class OverrideConfigProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load Path helpers
        $this->loadHelpers();

        // Define your config override here
        $this->configsOverride();
        
    }

    /**
     * Load helpers.
     */
    protected function loadHelpers()
    {
        foreach (glob(app_path().'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }

    /**
     * Override default config.
     */
    protected function configsOverride()
    {
        if( Schema::hasTable('cors_settings') ) {
            Config::set('activitylog.enabled', (boolean) get_cors('ACTIVITY_LOGGER_ENABLED'));
        }
    }
}
