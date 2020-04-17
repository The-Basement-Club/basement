<?php

namespace App\Contracts\Services;

use Kregel\Basement\Credential;
use Kregel\Basement\ServerServiceContract;

interface ServerServiceFactoryContract
{
    public function make(Credential $credential): ServerServiceContract;
}
