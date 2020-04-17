<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('link.'.config('app.domain'))->group(function() {
    Route::get('server/{credential:uuid}', App\Http\Controllers\Servers\Link::class);
    Route::get('ip', App\Http\Controllers\Servers\Ip::class);
});

Route::post('/auth/login', App\Http\Controllers\Auth\LoginController::class.'@login')->name('login');
Route::get('/auth/logout', App\Http\Controllers\Auth\LoginController::class.'@logout')->name('logout');
Route::post('/auth/register', App\Http\Controllers\Auth\RegisterController::class.'@register')->name('register');

Broadcast::routes(['middleware' => ['auth:sanctum']]);

Route::get('/{url}', function () {
    return view('index');
})->where('url', '^((?!(auth|api)).)*$')->name('spa');
