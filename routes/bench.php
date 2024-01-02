<?php

use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middleware = [
    'cors',
];
$middlewareAuth = [
    'cors',
    Framework\Baseapp\Middleware\AuthPayloadMiddleware::class,
    Framework\Baseapp\Middleware\UserCenterMiddleware::class,
];

Route::any('/bench/spider-point', '\ModuleBench\Controllers\SpiderinfoController@spiderPoint');
