<?php

namespace Radius\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        $this->loadMigrationsFrom(
            __DIR__.'/database/migrations'
        );

        $this->loadRoutesFrom(
            __DIR__.'/routes/web.php'
        );

        $this->loadViewsFrom(
            __DIR__.'/views','contact'
        );

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register()
    {

    }
}
