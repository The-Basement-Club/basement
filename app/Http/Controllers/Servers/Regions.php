<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\RegionsRequest;

class Regions
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, RegionsRequest $request, Credential $credential)
    {
        return $serverServiceFactory->make($credential)->findAllRegions();
    }
}
