<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('credentials', App\Http\Controllers\Credentials\ShowAll::class)->name('credentials.all');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('tokens', App\Http\Controllers\Settings\FindAllTokens::class)->name('settings.tokens.all');
        Route::post('tokens', App\Http\Controllers\Settings\CreateTokens::class)->name('settings.tokens.create');
    });

    Route::get('servers/{credential}/regions', App\Http\Controllers\Servers\Regions::class)->name('servers.regions');
    Route::get('servers/{credential}/sizes', App\Http\Controllers\Servers\Sizes::class)->name('servers.sizes');
    Route::get('servers/{credential}/ssh-keys', App\Http\Controllers\Servers\SshKeys::class)->name('servers.ssh-keys');

    // Create new servers for a credential
    Route::post('servers/{credential:id}', App\Http\Controllers\Servers\CreateServer::class)->name('servers.create');
    Route::delete('servers/{server:id}', App\Http\Controllers\Servers\DeleteServer::class)->name('servers.delete');
    Route::post('servers', App\Http\Controllers\Servers\CreateServerWithoutCredential::class)->name('servers.create-no-credential');
    // Get all servers for a credential
    Route::get('servers/{credential:id}', App\Http\Controllers\Servers\ShowAll::class)->name('servers.all');
    // Add an ssh key for a server credentials
    Route::post('servers/{credential}/ssh-key', App\Http\Controllers\Servers\CreateSshKey::class)->name('servers.ssh-key');

    // Actions to be performed on a server we pass through.
    Route::post('servers/{credential}/reboot', App\Http\Controllers\Servers\Reboot::class)->name('servers.reboot');
    Route::post('servers/{credential}/power-on', App\Http\Controllers\Servers\PowerOn::class)->name('servers.power-on');
    Route::post('servers/{credential}/power-off', App\Http\Controllers\Servers\PowerOff::class)->name('servers.power-off');
    Route::post('servers/{credential}/shutdown', App\Http\Controllers\Servers\Shutdown::class)->name('servers.shutdown');
});
