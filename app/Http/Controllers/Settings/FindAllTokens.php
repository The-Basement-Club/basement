<?php

namespace App\Http\Controllers\Settings;

class FindAllTokens
{
    public function __invoke()
    {
        return auth()->user()->tokens;
    }
}
