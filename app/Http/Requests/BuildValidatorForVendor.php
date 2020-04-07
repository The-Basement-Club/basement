<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Kregel\Basement\DigitalOcean\ValidationService;
use Kregel\Basement\NotImplementedException;

/**
 * @mixin Request
 */
trait BuildValidatorForVendor
{
    public function buildValidator()
    {
        switch ($this->route('credential')->type) {
            case 'digitalocean':
                return new ValidationService;
            default:
                throw new NotImplementedException(sprintf('%s is not a valid credential type for this version of %s', $this->route('credential')->type, config('app.name')));
        }
    }
}
