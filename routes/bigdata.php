<?php

use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareAuth = [
    //'auth:api',
    'cors',
    //Framework\Baseapp\Middleware\AuthUserMiddleware::class,
];

Route::middleware($middlewareAuth)->get('/bigdata/data-sync', '\ModuleBigdata\Controllers\DataSyncController@sync');
Route::middleware($middlewareAuth)->get('/bigdata/sync-status', '\ModuleBigdata\Controllers\DataSyncController@syncStatus');
Route::middleware($middlewareAuth)->get('/bigdata/sync-dump', '\ModuleBigdata\Controllers\DataSyncController@syncDump');
