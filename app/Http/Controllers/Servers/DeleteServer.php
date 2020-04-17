<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;

use App\Server;
use App\Events\Requested\ServerDeletionRequestedEvent;

class DeleteServer
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, DeleteServer $request, Server $server)
    {
        event(new ServerDeletionRequestedEvent($server));

        return response()->json([
            'message' => 'Deletion queued...'
        ]);
    }
}
