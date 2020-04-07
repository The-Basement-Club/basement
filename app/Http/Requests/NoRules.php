<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Kregel\Basement\DigitalOcean\ValidationService;
use Kregel\Basement\NotImplementedException;

/**
 * @mixin Request
 */
trait NoRules
{
    public function rules()
    {
        return [];
    }
}
