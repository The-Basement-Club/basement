<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Credential;
use App\PersonalAccessToken;
use Illuminate\Http\Request;

class Ip
{
    public function __invoke(Request $request)
    {
        return $request->ip();
    }
}
