<?php

namespace App\Policies;

use App\Models\Credential;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CredentialPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Credential $credential): bool
    {
        return $user->id === $credential->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Credential $credential): bool
    {
        return $user->id === $credential->user_id;
    }

    public function delete(User $user, Credential $credential): bool
    {
        return $user->id === $credential->user_id;
    }

    public function restore(User $user, Credential $credential): bool
    {
        return $user->id === $credential->user_id;
    }

    public function forceDelete(User $user, Credential $credential): bool
    {
        return $user->id === $credential->user_id;
    }
}
