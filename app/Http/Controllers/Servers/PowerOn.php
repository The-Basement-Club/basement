<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\StoreRequest;

class PowerOn
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, StoreRequest $request, Credential $credential, $identifier)
    {
        $serverServiceFactory->make($credential)->powerOnServer($identifier);
    }
}
