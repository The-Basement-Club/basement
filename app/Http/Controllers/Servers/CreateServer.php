<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\StoreRequest;
use App\Http\Resources\ServerResource;

class CreateServer
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, StoreRequest $request, Credential $credential)
    {
        $server = $serverServiceFactory->make($credential)->createServer($request->validated());

        return ServerResource::make($server);
    }
}
