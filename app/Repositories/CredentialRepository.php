<?php

namespace App\Repositories;

use App\Contracts\Repositories\CredentialRepositoryContract;
use App\Credential;
use App\PersonalAccessToken;
use App\User;
use Illuminate\Support\Str;

class CredentialRepository implements CredentialRepositoryContract
{
    public const DEFAULT_CREDENTIAL_NAME = 'Basement Default Credential';
    public const CREDENTIAL_TYPE_SERVER = 'server';

    public function findOrCreateDefaultCredentials(User $user): Credential
    {
        $credential = $user->credentials()->firstWhere('name', static::DEFAULT_CREDENTIAL_NAME);

        if (!empty($credential)) {
            return $credential;
        }

        return $user->credentials()->create([
            'name' => static::DEFAULT_CREDENTIAL_NAME,
            'uuid' => Str::uuid(),
            'enabled_on' => now(),
            'access_token' => $user->createToken(static::DEFAULT_CREDENTIAL_NAME, [PersonalAccessToken::SCOPE_CREATE_SERVER])->plainTextToken,
            'type' => static::CREDENTIAL_TYPE_SERVER,
        ]);
    }
}
