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

Route::middleware($middleware)->get('/infocms/deal-calligrapher', '\ModuleInfocms\Controllers\RubbingController@dealCalligrapher');
//Route::middleware($middlewareAuth)->any('/infocms/records/my-record', '\ModuleInfocms\Controllers\RecordController@myRecord');
