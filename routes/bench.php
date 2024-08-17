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

Route::any('/bench/page-spider-operation', '\ModuleBench\Controllers\PageController@operation');
Route::any('/bench/commoninfos/deal-book', '\ModuleBench\Controllers\PageController@dealBook');
