<?php

namespace VoyagerAdmin\AuthorizationBoilerplate;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class AuthorizationBoilerplateServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\VoyagerAdmin\AuthorizationBoilerplate\AuthorizationBoilerplate::class);
    }

    public function register()
    {
        // ...
    }
}