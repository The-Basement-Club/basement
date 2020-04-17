<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\RulesForDoingThingsOnServer;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class RebootRequest extends FormRequest
{
    use RulesForDoingThingsOnServer, AuthorizedViaCredential {
        authorize as authorizeCredentials;
    }

    public function authorize()
    {
        return $this->authorizeCredentials() && $this->user()->tokenCan(PersonalAccessToken::SCOPE_POWER_SERVER_OFF_SERVER);
    }}
