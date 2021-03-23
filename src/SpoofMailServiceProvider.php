<?php
namespace Nik\SpoofMailPackage;

use Illuminate\Support\ServiceProvider;
use Nik\SpoofMailPackage\Console\InstallSpoofMailPackage;
use Nik\SpoofMailPackage\Providers\EventServiceProvider;

class SpoofMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole())
            $this->publishes([
                __DIR__ . '/../config/spoofmail.php' => config_path('spoofmail.php'),
            ], 'config');

        if ($this->app->runningInConsole())
            $this->commands(InstallSpoofMailPackage::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/spoofmail.php', 'spoofmail');
        $this->app->register(EventServiceProvider::class);
    }
}