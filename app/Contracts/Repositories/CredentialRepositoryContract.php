<?php

namespace App\Contracts\Repositories;

use App\Credential;
use App\User;

interface CredentialRepositoryContract
{
    public function findOrCreateDefaultCredentials(User $user): Credential;
}
