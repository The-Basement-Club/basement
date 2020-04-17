<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\IndexRequest;
use App\Http\Resources\ServerResource;
use Illuminate\Support\Collection;

class ShowAll
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, IndexRequest $request, Credential $credential)
    {
        $servers = $serverServiceFactory->make($credential)->findAllServers();

        return ServerResource::collection(Collection::make($servers));
    }
}
