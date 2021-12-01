<?php

namespace unlobosolitario\larafile;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php', 'larafile');

        
        // load views
        $this->loadViewsFrom(__DIR__.'/views/', 'rbac');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
