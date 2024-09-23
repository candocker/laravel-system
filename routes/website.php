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

Route::any('/client1/setting/home', '\ModuleWebsite\Controllers\ClientController@settingHome');
Route::any('/client1/bbs/list_subject', '\ModuleWebsite\Controllers\ClientController@subjectDatas');
Route::any('/client1/bbs/setting_forum', '\ModuleWebsite\Controllers\ClientController@groupDatas');

Route::get('/client/{model}/{action}', '\ModuleWebsite\Controllers\ClientController@home');
Route::any('/client1/{model}/{action}', '\ModuleWebsite\Controllers\ClienttmpController@index');
Route::any('/thirddata/{app}/{model}/{action}', '\ModuleWebsite\Controllers\ClientController@thirddata');

Route::any('/remote/{type}-data', '\ModuleWebsite\Controllers\ClientController@dealRemoteUrls');


Route::any('/knowledge/global-setting', '\ModuleWebsite\Controllers\ClientController@globalSetting');
Route::any('/knowledge/seckill-data', '\ModuleWebsite\Controllers\ClientController@seckillData');
Route::any('/knowledge/home-data-mobile', '\ModuleWebsite\Controllers\ClientController@homeDataMobile');
Route::any('/knowledge/classify', '\ModuleWebsite\Controllers\ClientController@classifyDatas');
Route::any('/knowledge/course-detail', '\ModuleWebsite\Controllers\ClientController@courseDetail');
Route::any('/knowledge/course/list', '\ModuleWebsite\Controllers\ClientController@courseList');
Route::any('/knowledge/hot/course', '\ModuleWebsite\Controllers\ClientController@hotCourseList');

Route::any('/knowledge/{model}/{action}', '\ModuleWebsite\Controllers\ClientController@knowledgeData');

Route::any('/cats/lv2/statistics', '\ModuleWebsite\Controllers\ClientController@booktest1');

Route::middleware($middleware)->get('/book-system/deal-book', '\ModuleWebsite\Controllers\ReadController@dealBook');

Route::middleware($middleware)->get('/book-system/sort-book', '\ModuleWebsite\Controllers\BookhouseController@readerSortBooks');
Route::middleware($middleware)->get('/book-system/book-info', '\ModuleWebsite\Controllers\BookhouseController@readerBookInfo');
Route::middleware($middleware)->get('/book-system/chapter-detail', '\ModuleWebsite\Controllers\BookhouseController@readerChapterDetail');

Route::middleware($middleware)->get('/book-system/foreign-sort', '\ModuleWebsite\Controllers\BookhouseController@foreignSorts');
Route::middleware($middleware)->get('/book-system/get-table-data', '\ModuleWebsite\Controllers\BookhouseController@getTableDatas');
Route::middleware($middleware)->get('/book-system/get-house-loan', '\ModuleWebsite\Controllers\BookhouseController@houseLoan');

Route::middleware($middleware)->get('/knowledge-system/get-big-sort', '\ModuleWebsite\Controllers\BookhouseController@knowledgeBigSorts');
Route::middleware($middleware)->get('/knowledge-system/get-sort', '\ModuleWebsite\Controllers\BookhouseController@knowledgeSorts');

Route::middleware($middleware)->get('/knowledge-system/group-detail', '\ModuleWebsite\Controllers\BookhouseController@groupDetail');
Route::middleware($middleware)->get('/knowledge-system/figure-detail', '\ModuleWebsite\Controllers\BookhouseController@figureDetail');
Route::middleware($middleware)->get('/knowledge-system/infolist', '\ModuleWebsite\Controllers\BookhouseController@infolist');
