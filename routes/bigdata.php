<?php

use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareAuth = [
    //'auth:api',
    'cors',
    //Framework\Baseapp\Middleware\AuthUserMiddleware::class,
];

Route::middleware($middlewareAuth)->get('/bigdata/deal-order', '\ModuleBigdata\Controllers\DataSyncController@dealOrder');
Route::middleware($middlewareAuth)->get('/bigdata/update-sync', '\ModuleBigdata\Controllers\DataSyncController@updateSync');
Route::middleware($middlewareAuth)->get('/bigdata/sync-dump', '\ModuleBigdata\Controllers\DataSyncController@syncDump');
Route::middleware($middlewareAuth)->get('/bigdata/table-structure', '\ModuleBigdata\Controllers\DataSyncController@tableStructure');
