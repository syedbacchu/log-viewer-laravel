<?php

namespace Sdtech\LogViewerLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class LogViewerLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if (method_exists($this, 'package')) {
            $this->package('sdtech/log-viewer-laravel', 'log-viewer-laravel', __DIR__.'/../../');
        }

        if (method_exists($this, 'loadViewsFrom')) {
            $this->loadViewsFrom(__DIR__.'/../../views', 'log-viewer-laravel');
        }

        if (method_exists($this, 'publishes')) {
            $this->publishes([
                __DIR__.'/../../views' => base_path('/resources/views/vendor/log-viewer-laravel'),
            ], 'logviewerlaravel');
            $this->publishes([
                __DIR__.'/../../config/logviewer.php' => $this->config_path('logviewer.php'),
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
        //
    }

    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    private function config_path($path = '')
    {
        return function_exists('config_path') ? config_path($path) : app()->basePath().DIRECTORY_SEPARATOR.'config'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

}
