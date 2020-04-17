<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\NoRules;
use App\Http\Requests\RulesForDoingThingsOnServer;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class ShutdownRequest extends FormRequest
{
    use RulesForDoingThingsOnServer, AuthorizedViaCredential {
        authorize as authorizeOld;
    }

    public function authorize()
    {
        return $this->authorizeOld() && $this->user()->tokenCan(PersonalAccessToken::SCOPE_POWER_SERVER_SHUTDOWN_SERVER);
    }
}
