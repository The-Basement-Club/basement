<?php

namespace App\Http\Controllers\Credentials;

class ShowAll
{
    public function __invoke()
    {
        return auth()->user()->credentials;
    }
}
