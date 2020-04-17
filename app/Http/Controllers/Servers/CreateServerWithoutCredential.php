<?php

namespace App\Http\Controllers\Servers;

use App\Contracts\Repositories\CredentialRepositoryContract;
use App\Contracts\Services\ServerServiceFactoryContract;
use App\Http\Requests\Server\StoreWithoutCredentialsRequest;
use App\Http\Resources\ServerResource;
use App\PersonalAccessToken;
use App\Server;
use App\User;

class CreateServerWithoutCredential
{
    public function __invoke(CredentialRepositoryContract $credentialRepository, ServerServiceFactoryContract $serverServiceFactory, StoreWithoutCredentialsRequest $request)
    {
        $server = Server::create($request->validated() + [
            'user_id' => auth()->id(),
            'credential_id' => $credentialRepository->findOrCreateDefaultCredentials($request->user())->id,
        ]);

        $server->refresh();

        $server->setAttribute('access_token', $request->user()->createToken($server->name . ' Access Token', [
            PersonalAccessToken::SCOPE_UPDATE_SERVER,
            PersonalAccessToken::SCOPE_READ_SCRIPT,
            PersonalAccessToken::SCOPE_EXECUTE_SCRIPT,
            PersonalAccessToken::SCOPE_READ_USER,
            PersonalAccessToken::SCOPE_CREATE_SSH_KEY,
            PersonalAccessToken::SCOPE_DELETE_SSH_KEY,
        ]));

        return ServerResource::make($server);
    }
}
