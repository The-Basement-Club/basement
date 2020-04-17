<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\SshKeyRequest;

class SshKeys
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, SshKeyRequest $request, Credential $credential)
    {
        return $serverServiceFactory->make($credential)->findAllSshkeys();
    }
}
