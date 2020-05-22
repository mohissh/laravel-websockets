<?php

namespace BeyondCode\LaravelWebSockets\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Ratchet\ConnectionInterface;

class WebsocketOnOpen
{
    use Dispatchable, SerializesModels;

    public $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }
}
