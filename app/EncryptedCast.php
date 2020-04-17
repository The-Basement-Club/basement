<?php

namespace App;

use Vkovic\LaravelCustomCasts\CustomCastBase;

class EncryptedCast extends CustomCastBase
{
    /**
     * @inheritDoc
     */
    public function setAttribute($value)
    {
        return encrypt($value);
    }

    /**
     * @return string
     */
    public function castAttribute($value): string
    {
        return decrypt($value);
    }
}
