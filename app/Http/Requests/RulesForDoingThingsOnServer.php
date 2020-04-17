<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

/**
 * @mixin Request
 */
trait RulesForDoingThingsOnServer
{
    public function rules()
    {
        return [
            'server_id' => 'required'
        ];
    }
}
