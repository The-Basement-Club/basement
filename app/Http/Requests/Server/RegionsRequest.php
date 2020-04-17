<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\BuildValidatorForVendor;
use App\Http\Requests\NoRules;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class RegionsRequest extends AbstractRequest
{
    use NoRules, AuthorizedViaCredential;
}
