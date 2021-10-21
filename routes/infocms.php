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

Route::middleware($middleware)->get('/infocms/book/tmp', '\ModuleInfocms\Controllers\RubbingController@tmp');
Route::middleware($middleware)->get('/infocms/book/category', '\ModuleInfocms\Controllers\RubbingController@category');

Route::middleware($middleware)->get('/infocms/book/book-detail', '\ModuleInfocms\Controllers\RubbingController@bookDetail');
Route::middleware($middleware)->get('/infocms/book/book-home', '\ModuleInfocms\Controllers\RubbingController@bookHome');
Route::middleware($middleware)->get('/infocms/book/book-list', '\ModuleInfocms\Controllers\RubbingController@bookList');
Route::middleware($middleware)->get('/infocms/book/channel', '\ModuleInfocms\Controllers\RubbingController@channel');
Route::middleware($middleware)->get('/infocms/book/collection', '\ModuleInfocms\Controllers\RubbingController@collection');
Route::middleware($middleware)->get('/infocms/book/figure', '\ModuleInfocms\Controllers\RubbingController@figure');
Route::middleware($middleware)->get('/infocms/book/shelf', '\ModuleInfocms\Controllers\RubbingController@shelf');
Route::middleware($middleware)->get('/infocms/book/store', '\ModuleInfocms\Controllers\RubbingController@store');
