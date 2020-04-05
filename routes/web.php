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

Route::post('/auth/login', function( ){
    $email = Request::get('email');
    $password = Request::get('password');

    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return response()->json([], 200);
    }

    return response()->json([
        'error' => 'invalid_credentials'
    ], 403);
});
Route::get('/auth/logout', function (){
    Auth::guard('web')->logout();
   return [
       'message' => 'Success'
   ];
})->middleware('auth:sanctum');
Route::post('/auth/register', function (\Illuminate\Http\Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);

    $name = $request->get('name');
    $email = $request->get('email');
    $password = $request->get('password');

    App\User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password),
    ]);

    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return response()->json('', 204 );
    }
    return response()->json([
        'error' => 'invalid_credentials'
    ], 403);
});
Route::get('/{url}', function (){
    return view('index');
})->where('url', '^((?!(auth|api)).)*$');
