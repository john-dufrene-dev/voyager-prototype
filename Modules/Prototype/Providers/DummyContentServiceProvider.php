<?php

namespace Modules\Prototype\Providers;

use Illuminate\Support\ServiceProvider;

class DummyContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $publishablePath = module_path('Prototype');

        $publishable = [
            'dummy_content' => [
                "{$publishablePath}/Resources/dummy_content/" => storage_path('app/public'),
            ],
        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
