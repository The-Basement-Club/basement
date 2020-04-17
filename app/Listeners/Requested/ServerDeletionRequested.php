<?php

namespace App\Listeners\Requested;

use App\Events\Requested\ServerDeletionRequestedEvent;
use App\Jobs\Servers\DeleteServerJob;
use Illuminate\Contracts\Queue\ShouldQueue;

class ServerDeletionRequested implements ShouldQueue
{
    public function handle(ServerDeletionRequestedEvent $event)
    {
        DeleteServerJob::dispatch($event->server);
    }
}
