<?php

use \Illuminate\Http\Request;
use App\Models\User;
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/login', function (Request $request) {
    $token = app('auth')->attempt($request->only('email', 'password'));
 
    return response()->json(compact('token'));
});