<?php

use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareAuth = [
    //'auth:api',
    'cors',
    //Framework\Baseapp\Middleware\AuthUserMiddleware::class,
];

Route::middleware($middlewareAuth)->get('/culture/books/epub', '\ModuleCulture\Controllers\BookController@epub');
Route::middleware($middlewareAuth)->get('/culture/books/home', '\ModuleCulture\Controllers\BookController@home');
Route::middleware($middlewareAuth)->get('/culture/books/detail', '\ModuleCulture\Controllers\BookController@detail');
Route::middleware($middlewareAuth)->get('/culture/tags/home', '\ModuleCulture\Controllers\TagController@home');
Route::middleware($middlewareAuth)->get('/culture/chapters/epub', '\ModuleCulture\Controllers\ChapterController@epub');
