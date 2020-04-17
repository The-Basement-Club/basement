<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\ShutdownRequest;

class Shutdown
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, ShutdownRequest $request, Credential $credential, $identifier)
    {
        $serverServiceFactory->make($credential)->shutdownServer($identifier);
    }
}
