<?php

namespace Aidanraskil\Snmp;

use Illuminate\Support\ServiceProvider;

class SnmpServiceProvider extends ServiceProvider
{
   
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
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('snmp', function()
        {
            return new Snmp();
        });
    }
}
