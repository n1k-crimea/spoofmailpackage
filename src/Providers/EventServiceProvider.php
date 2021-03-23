<?php
namespace Nik\SpoofMailPackage\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;
use Nik\SpoofMailPackage\Listeners\SpoofingMail;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        MessageSending::class => [
            SpoofingMail::class,
        ]
    ];

    public function boot()
    {
        parent::boot();
    }
}