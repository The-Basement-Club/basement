<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\BuildValidatorForVendor;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends AbstractRequest
{
    use BuildValidatorForVendor;

    public function authorize(): bool
    {
        return $this->user()->tokenCan(PersonalAccessToken::SCOPE_CREATE_SERVER);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->buildValidator()->serverRules();
    }
}
