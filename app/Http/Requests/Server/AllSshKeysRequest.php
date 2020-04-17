<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\NoRules;
use App\PersonalAccessToken;

class AllSshKeysRequest extends AbstractRequest
{
    use NoRules, AuthorizedViaCredential {
        authorize as authorizeOld;
    }

    public function authorize()
    {
        return $this->authorizeOld() && $this->user()->tokenCan(PersonalAccessToken::SCOPE_CREATE_SSH_KEY);
    }}
