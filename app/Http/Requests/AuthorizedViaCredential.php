<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

/**
 * @mixin Request
 */
trait AuthorizedViaCredential
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->is($this->route('credential')->user);
    }
}
