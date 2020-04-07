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
    Route::post('servers', \App\Http\Controllers\ServerController::class.'@store');
    Route::get('servers', \App\Http\Controllers\ServerController::class.'@index');

    Route::put('servers/{credential}/power-on', \App\Http\Controllers\ServerController::class.'@powerOn');
    Route::put('servers/{credential}/power-off', \App\Http\Controllers\ServerController::class.'@powerOff');
    Route::put('servers/{credential}/shutdown', \App\Http\Controllers\ServerController::class.'@shutdown');
    Route::get('servers/{credential}/regions', \App\Http\Controllers\ServerController::class.'@regions');
    Route::get('servers/{credential}/sizes', \App\Http\Controllers\ServerController::class.'@sizes');
    Route::post('servers/{credential}/ssh-key', \App\Http\Controllers\ServerController::class.'@sshKeys');
    Route::put('servers/{credential}/reboot', \App\Http\Controllers\ServerController::class.'@reboot');
});
