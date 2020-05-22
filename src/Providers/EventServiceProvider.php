<?php

namespace BeyondCode\LaravelWebSockets\Providers;

use BeyondCode\LaravelWebSockets\Events\WebsocketOnOpen;
use BeyondCode\LaravelWebSockets\Listeners\WebsocketOnOpenListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        WebsocketOnOpen::class => [
            WebsocketOnOpenListener::class
        ]
    ];


    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
