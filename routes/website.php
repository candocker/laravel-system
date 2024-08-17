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

Route::get('/web-resource', '\ModuleWebsite\Controllers\BlogController@webResource');

Route::get('/blog/article', '\ModuleWebsite\Controllers\BlogController@articleList');
Route::get('/blog/article/calendar', '\ModuleWebsite\Controllers\BlogController@articleCalendar');
Route::get('/blog/article/hottest', '\ModuleWebsite\Controllers\BlogController@articleHottest');
Route::get('/blog/article/{id}/context', '\ModuleWebsite\Controllers\BlogController@articleRelate');
Route::get('/blog/article/{id}', '\ModuleWebsite\Controllers\BlogController@articleDetail');
Route::get('/blog/tag', '\ModuleWebsite\Controllers\BlogController@tag');
Route::get('/blog/tag/hottest', '\ModuleWebsite\Controllers\BlogController@tagHottest');
Route::get('/blog/option', '\ModuleWebsite\Controllers\BlogController@option');

Route::get('/article', '\ModuleWebsite\Controllers\BlogtmpController@articleList');
Route::get('/article/calendar', '\ModuleWebsite\Controllers\BlogtmpController@articleCalendar');
Route::get('/article/hottest', '\ModuleWebsite\Controllers\BlogtmpController@articleHottest');
Route::get('/article/{id}/context', '\ModuleWebsite\Controllers\BlogtmpController@articleRelate');
Route::get('/article/{id}', '\ModuleWebsite\Controllers\BlogtmpController@articleDetail');
Route::get('/tag', '\ModuleWebsite\Controllers\BlogtmpController@tag');
Route::get('/tag/hottest', '\ModuleWebsite\Controllers\BlogtmpController@tagHottest');
//Route::get('/option', '\ModuleWebsite\Controllers\BlogtmpController@tmp');

Route::get('/comment', '\ModuleWebsite\Controllers\BlogtmpController@comment');
Route::get('/disqus/comment', '\ModuleWebsite\Controllers\BlogtmpController@dcomment');
Route::get('/disqus/config', '\ModuleWebsite\Controllers\BlogtmpController@disqus');
Route::get('/disqus/user-info', '\ModuleWebsite\Controllers\BlogtmpController@userinfo');

//Route::get('/diagram/{id}', '\ModuleWebsite\Controllers\BlogtmpController@article');
Route::get('/archive', '\ModuleWebsite\Controllers\BlogtmpController@archive');
Route::get('/expansion/statistic', '\ModuleWebsite\Controllers\BlogtmpController@statistic');
Route::get('/announcement', '\ModuleWebsite\Controllers\BlogtmpController@announce');
Route::get('/auth/admin', '\ModuleWebsite\Controllers\BlogtmpController@admin');
Route::get('/category', '\ModuleWebsite\Controllers\BlogtmpController@category');
Route::get('/tag/all', '\ModuleWebsite\Controllers\BlogtmpController@tagAll');


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


Route::middleware($middleware)->get('/book-system/sort-book', '\ModuleWebsite\Controllers\BookhouseController@readerSortBooks');
Route::middleware($middleware)->get('/book-system/book-info', '\ModuleWebsite\Controllers\BookhouseController@readerBookInfo');
Route::middleware($middleware)->get('/book-system/chapter-detail', '\ModuleWebsite\Controllers\BookhouseController@readerChapterDetail');

Route::middleware($middleware)->get('/book-system/foreign-sort', '\ModuleWebsite\Controllers\BookhouseController@foreignSorts');
Route::middleware($middleware)->get('/book-system/get-table-data', '\ModuleWebsite\Controllers\BookhouseController@getTableDatas');
