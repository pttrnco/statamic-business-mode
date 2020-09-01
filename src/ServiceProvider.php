<?php

namespace Pattern\BusinessMode;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $stylesheets = [
        __DIR__ . '/../resources/css/business-mode.css'
    ];

    public function boot()
    {
        parent::boot();
    }
}
