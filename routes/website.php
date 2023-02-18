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


Route::get('/blog/article', '\ModuleWebsite\Controllers\BlogController@articleList');
Route::get('/blog/article/calendar', '\ModuleWebsite\Controllers\BlogController@articleCalendar');
Route::get('/blog/article/hottest', '\ModuleWebsite\Controllers\BlogController@articleHottest');
Route::get('/blog/article/{id}/context', '\ModuleWebsite\Controllers\BlogController@articleRelate');
Route::get('/blog/article/{id}', '\ModuleWebsite\Controllers\BlogController@articleDetail');
Route::get('/blog/tag', '\ModuleWebsite\Controllers\BlogController@tag');
Route::get('/blog/tag/hottest', '\ModuleWebsite\Controllers\BlogController@tagHottest');
//Route::get('/option', '\ModuleWebsite\Controllers\BlogController@tmp');
Route::get('/blog/option', '\ModuleWebsite\Controllers\BlogController@option');

Route::get('/comment', '\ModuleWebsite\Controllers\BlogController@comment');
Route::get('/disqus/comment', '\ModuleWebsite\Controllers\BlogController@dcomment');
Route::get('/disqus/config', '\ModuleWebsite\Controllers\BlogController@disqus');
Route::get('/disqus/user-info', '\ModuleWebsite\Controllers\BlogController@userinfo');

//Route::get('/diagram/{id}', '\ModuleWebsite\Controllers\BlogController@article');
Route::get('/archive', '\ModuleWebsite\Controllers\BlogController@archive');
Route::get('/expansion/statistic', '\ModuleWebsite\Controllers\BlogController@statistic');
Route::get('/announcement', '\ModuleWebsite\Controllers\BlogController@announce');
Route::get('/auth/admin', '\ModuleWebsite\Controllers\BlogController@admin');
Route::get('/category', '\ModuleWebsite\Controllers\BlogController@category');
Route::get('/tag/all', '\ModuleWebsite\Controllers\BlogController@tagAll');

Route::get('/client/{model}/{action}', '\ModuleWebsite\Controllers\ClientController@home');
Route::any('/client1/{model}/{action}', '\ModuleWebsite\Controllers\ClientController@index');
