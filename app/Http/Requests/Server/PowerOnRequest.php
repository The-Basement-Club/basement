<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\BuildValidatorForVendor;
use App\Http\Requests\NoRules;
use Illuminate\Foundation\Http\FormRequest;

class PowerOnRequest extends FormRequest
{
    use AuthorizedViaCredential, NoRules;
}
