<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\SizesRequest;

class Sizes
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, SizesRequest $request, Credential $credential)
    {
        return $serverServiceFactory->make($credential)->findAllSizes();
    }
}
