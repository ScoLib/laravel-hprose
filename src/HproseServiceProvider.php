<?php

namespace Sco\LaravelHprose;

use Illuminate\Support\ServiceProvider;

class HproseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/hprose.php' => config_path('hprose.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/hprose.php',
            'hprose'
        );
    }
}
