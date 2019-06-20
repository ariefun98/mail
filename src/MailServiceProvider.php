<?php

namespace zirvu\mail;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Zirvu\Mail\MailController');
        $this->loadViewsFrom(__DIR__.'/views', 'mail');
    }
}
