<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\Http\Requests\Server\LinkRequest;
use App\PersonalAccessToken;
use Illuminate\Http\Request;

class Link
{
    public function __invoke(ServerServiceFactoryContract $serverServiceFactory, LinkRequest $request, Credential $credential)
    {
        return response()->view('basement-scripts.link-server', [
            'credential' => $credential,
            'user' => auth()->id(),
        ], 200, [
            'Content-type' => 'text/text'
        ]);
    }
}
