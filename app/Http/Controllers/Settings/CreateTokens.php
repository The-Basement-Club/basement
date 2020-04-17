<?php

namespace App\Http\Controllers\Settings;

use App\Credential;
use App\Http\Requests\Settings\CreateTokensRequest;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

class CreateTokens
{
    public function __invoke(CreateTokensRequest $request)
    {
        /** @var NewAccessToken $token */
        $token = auth()->user()->createToken($request->validated()['name'], $request->validated()['abilities'] ?? []);

        if (!Credential::where(['name' => 'Basement Default Credentials', 'user_id' => auth()->id()])->exists()) {
            Credential::create([
                'name' => 'Basement Default Credential',
                'access_token' => $token->plainTextToken,
                'type' => 'basement',
                'enabled_on' => now(),
                'user_id' => auth()->id()
            ]);
        }

        return $token->plainTextToken;
    }
}
