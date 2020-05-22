<?php

namespace BeyondCode\LaravelWebSockets\Listeners;

use BeyondCode\LaravelWebSockets\Events\WebsocketOnOpen;
use Illuminate\Support\Facades\Log;

class WebsocketOnOpenListener
{
    public function handle(WebsocketOnOpen $event)
    {
        Log::info($event->connection);
    }
}
