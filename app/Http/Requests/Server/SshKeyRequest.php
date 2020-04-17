<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\RulesForDoingThingsOnServer;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class SshKeyRequest extends AbstractRequest
{
    use RulesForDoingThingsOnServer, AuthorizedViaCredential {
        authorize as authorizeOld;
    }

    public function authorize()
    {
        return $this->authorizeOld() && $this->user()->tokenCan(PersonalAccessToken::SCOPE_CREATE_SSH_KEY);
    }
}
