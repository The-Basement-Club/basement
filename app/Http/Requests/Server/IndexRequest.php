<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AuthorizedViaCredential;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    use AuthorizedViaCredential;

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
