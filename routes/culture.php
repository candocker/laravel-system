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
Route::middleware($middleware)->get('/culture/chpater/detail', '\ModuleCulture\Controllers\ChapterController@detail');
Route::middleware($middleware)->get('/culture/books/front-list', '\ModuleCulture\Controllers\BookController@frontList');
//Route::middleware($middleware)->get('/culture/tags/home', '\ModuleCulture\Controllers\TagController@home');
Route::middleware($middleware)->get('/culture/categories/home', '\ModuleCulture\Controllers\BookSortController@home');
Route::middleware($middleware)->get('/culture/chapters/epub', '\ModuleCulture\Controllers\ChapterController@epub');
Route::middleware($middlewareAuth)->post('/culture/chapter-records/record', '\ModuleCulture\Controllers\ChapterRecordController@record');
//Route::middleware($middlewareAuth)->any('/culture/chapter-records/record1', '\ModuleCulture\Controllers\ChapterRecordController@record');
Route::middleware($middlewareAuth)->get('/culture/shelves/mylist', '\ModuleCulture\Controllers\ShelfController@mylist');
Route::middleware($middlewareAuth)->delete('/culture/shelves/destroy', '\ModuleCulture\Controllers\ShelfController@destroy');
Route::middleware($middlewareAuth)->any('/culture/shelf-books/record', '\ModuleCulture\Controllers\ShelfBookController@record');
Route::middleware($middlewareAuth)->any('/culture/shelf-books/updata', '\ModuleCulture\Controllers\ShelfBookController@updata');
Route::middleware($middlewareAuth)->any('/culture/book-records/my-record', '\ModuleCulture\Controllers\BookRecordController@myRecord');
Route::middleware($middlewareAuth)->any('/culture/chapter-records/my-record', '\ModuleCulture\Controllers\ChapterRecordController@myRecord');
Route::middleware($middlewareAuth)->any('/culture/records/my-record', '\ModuleCulture\Controllers\RecordController@myRecord');



Route::middleware($middleware)->get('/culture/book/tmp', '\ModuleCulture\Controllers\RubbingController@tmp');
Route::middleware($middleware)->get('/culture/book/category', '\ModuleCulture\Controllers\RubbingController@category');

Route::middleware($middleware)->get('/culture/book/book-detail', '\ModuleCulture\Controllers\RubbingController@bookDetail');
Route::middleware($middleware)->get('/culture/book/book-home', '\ModuleCulture\Controllers\RubbingController@bookHome');
Route::middleware($middleware)->get('/culture/book/book-list', '\ModuleCulture\Controllers\RubbingController@bookList');
Route::middleware($middleware)->get('/culture/book/channel', '\ModuleCulture\Controllers\RubbingController@channel');
Route::middleware($middleware)->get('/culture/book/collection', '\ModuleCulture\Controllers\RubbingController@collection');
Route::middleware($middleware)->get('/culture/book/figure', '\ModuleCulture\Controllers\RubbingController@figure');
Route::middleware($middleware)->get('/culture/book/shelf', '\ModuleCulture\Controllers\RubbingController@shelf');
Route::middleware($middleware)->get('/culture/book/store', '\ModuleCulture\Controllers\RubbingController@store');

Route::middleware($middleware)->get('/infocms/deal-calligrapher', '\ModuleCulture\Controllers\RubbingController@dealCalligrapher');

Route::middleware($middleware)->get('/culture/test', '\ModuleCulture\Controllers\TestController@test');


Route::middleware($middleware)->get('/culture/diagram-detail/{id}', '\ModuleCulture\Controllers\DiagramController@detail');
