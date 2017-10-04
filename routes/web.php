<?php

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

Route::get('/', 'HomeController@index');
Route::post('/upload', 'HomeController@upload');

/**
 * Authentication
 */
Route::get('youtube/auth', function () {
    return redirect()->to(Youtube::createAuthUrl());
});

/**
 * Redirect
 */
Route::get('youtube/callback', function (Illuminate\Http\Request $request) {
    if (!$request->has('code')) {
        throw new Exception('$_GET[\'code\'] is not set. Please re-authenticate.');
    }

    $token = Youtube::authenticate($request->get('code'));

    Youtube::saveAccessToken($token);

    return redirect(config('youtube.routes.redirect_back_uri', '/'));
});

