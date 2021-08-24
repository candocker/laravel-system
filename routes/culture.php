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

Route::middleware($middleware)->get('/culture/books/epub', '\ModuleCulture\Controllers\BookController@epub');
Route::middleware($middleware)->get('/culture/books/home', '\ModuleCulture\Controllers\BookController@home');
Route::middleware($middleware)->get('/culture/books/detail', '\ModuleCulture\Controllers\BookController@detail');
Route::middleware($middleware)->get('/culture/books/front-list', '\ModuleCulture\Controllers\BookController@frontList');
Route::middleware($middleware)->get('/culture/tags/home', '\ModuleCulture\Controllers\TagController@home');
Route::middleware($middleware)->get('/culture/categories/home', '\ModuleCulture\Controllers\CategoryController@home');
Route::middleware($middleware)->get('/culture/chapters/epub', '\ModuleCulture\Controllers\ChapterController@epub');
Route::middleware($middlewareAuth)->post('/culture/chapter-records/record', '\ModuleCulture\Controllers\ChapterRecordController@record');
//Route::middleware($middlewareAuth)->any('/culture/chapter-records/record1', '\ModuleCulture\Controllers\ChapterRecordController@record');
Route::middleware($middlewareAuth)->get('/culture/shelfs/mylist', '\ModuleCulture\Controllers\ShelfController@mylist');
Route::middleware($middlewareAuth)->delete('/culture/shelfs/destroy', '\ModuleCulture\Controllers\ShelfController@destroy');
Route::middleware($middlewareAuth)->any('/culture/shelf-books/record', '\ModuleCulture\Controllers\ShelfBookController@record');
Route::middleware($middlewareAuth)->any('/culture/shelf-books/updata', '\ModuleCulture\Controllers\ShelfBookController@updata');
Route::middleware($middlewareAuth)->any('/culture/book-records/my-record', '\ModuleCulture\Controllers\BookRecordController@myRecord');
Route::middleware($middlewareAuth)->any('/culture/chapter-records/my-record', '\ModuleCulture\Controllers\ChapterRecordController@myRecord');
Route::middleware($middlewareAuth)->any('/culture/records/my-record', '\ModuleCulture\Controllers\RecordController@myRecord');
