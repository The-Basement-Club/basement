<?php

namespace App\Http\Requests\Settings;

use App\Http\Requests\AbstractRequest;
use App\PersonalAccessToken;

class CreateTokensRequest extends AbstractRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required',
            'abilities.*' => 'required',
        ];
    }
}
