<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\RebootRequest;

class Reboot
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, RebootRequest $request, Credential $credential, $identifier)
    {
        $serverServiceFactory->make($credential)->rebootServer($identifier);
    }
}
