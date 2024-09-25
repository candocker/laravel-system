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

Route::middleware($middleware)->get('/knowledge/test', '\ModuleKnowledge\Controllers\TestController@test');
//Route::any('/knowledge/spider-point', '\ModuleKnowledge\Controllers\SpiderinfoController@spiderPoint');
