<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\PowerOffRequest;

class PowerOff
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, PowerOffRequest$request, Credential $credential, $identifier)
    {
        $serverServiceFactory->make($credential)->powerOffServer($identifier);
    }
}
