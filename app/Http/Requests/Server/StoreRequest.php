<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\BuildValidatorForVendor;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    use AuthorizedViaCredential, BuildValidatorForVendor;

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
