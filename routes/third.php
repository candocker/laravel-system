<?php

use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middleware = [
    'cors',
];
$middlewareAuth = [
    'cors',
    //Framework\Baseapp\Middleware\AuthPayloadMiddleware::class,
    //Framework\Baseapp\Middleware\UserCenterMiddleware::class,
];

Route::middleware($middleware)->get('/third/work/callback', '\ModuleThird\Controllers\PlatController@workCallback');
