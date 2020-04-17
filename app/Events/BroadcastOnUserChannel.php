<?php

namespace App\Events;

use App\Server;
use Illuminate\Broadcasting\PrivateChannel;

trait BroadcastOnUserChannel
{
    /**
     * @var Server
     */
    public $server;

    public function broadcastOn()
    {
        return new PrivateChannel('App.User.'.$this->server->user_id);
    }
}
