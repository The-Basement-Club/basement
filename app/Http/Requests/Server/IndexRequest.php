<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\RulesForDoingThingsOnServer;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends AbstractRequest
{
    use AuthorizedViaCredential {
        authorize as authorizeOld;
    }

    public function authorize()
    {
        return $this->authorizeOld() && $this->user()->tokenCan(PersonalAccessToken::SCOPE_READ_SERVER);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
