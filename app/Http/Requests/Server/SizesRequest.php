<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\NoRules;

class SizesRequest extends AbstractRequest
{
    use NoRules, AuthorizedViaCredential;
}
