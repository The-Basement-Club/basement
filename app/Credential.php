<?php

namespace App;

use Illuminate\Support\Str;
use Kregel\Basement\Credential as BasementCredential;

class Credential extends BasementCredential
{
    protected static function booted()
    {
        Credential::creating(function (Credential $credential) {
            $credential->uuid = Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function servers()
    {
        return $this->hasMany(Server::class);
    }
}
