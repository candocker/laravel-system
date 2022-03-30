<?php

use Illuminate\Support\Facades\Route;
use Framework\Baseapp\Helpers\ResourceContainer;

$resourceContainer = app()->make(ResourceContainer::class);

$routes = [
    'culture' => [
        'routes' => ['', 'lx-sort', 'jd-sort', 'jd-sort-{sort}', 'book-detail', 'book-home', 'book-list', 'channel', 'collection', 'figure', 'shelf', 'store', 'graphic', 'graphic-{sort}-{extcode}', 'graphic-{sort}', '{code}'],
        'jd-sort' => ['action' => 'category'],
        'jd-sort-{sort}' => ['action' => 'category'],
        'sf-sort' => ['action' => 'category'],
        'sf-sort-{sort}' => ['action' => 'category'],
        'graphic' => ['controller' => 'graphic', 'action' => 'home'],
        'graphic-{sort}' => ['controller' => 'graphic', 'action' => 'home'],
        'graphic-{sort}-{extcode}' => ['controller' => 'graphic', 'action' => 'home'],
        //'{code}' => ['action' => 'view'],
    ],
    'human' => [
        'routes' => ['', '{code}'],
        '{code}' => ['action' => 'view'],
    ],
    'classical' => [
        'routes' => ['list-{code}', 'detail-{code}', 'show-{code}'],
        'list-{code}' => ['controller' => 'classical', 'action' => 'listinfo'],
        'detail-{code}' => ['controller' => 'classical', 'action' => 'detail'],
        'show-{code}' => ['controller' => 'classical', 'action' => 'show'],
    ],
    'navigation' => [
        'routes' => ['', 'rank', 'search', 'tool', 'operation', 'coolsite', 'sub-{sort}'],
        'sub-{sort}' => ['action' => 'subnav'],
    ],
];
$currentHost = $_SERVER['HTTP_HOST'] ?? false;
$domains = config('app.domains');
$domainKey = $currentDomain = '';
foreach ($domains as $dKey => $dValue) {
    if ($currentHost == str_replace(['https://', 'http://'], ['', ''], $dValue)) {
        $domainKey = $dKey;
        $currentDomain = $dValue;
        break;
    }
    if (strpos($dValue, '{') !== false) {
        $siteCode = explode('.', $currentHost)[0];
        $siteCode = explode('-', $siteCode)[0];
        if ($siteCode == $dKey) {
            $domainKey = $dKey;
            $currentDomain = $dValue;
            break;
        }
    }
}
foreach ($routes as $domain => $domainRoutes) {
    if ($domainKey != $domain) {
        continue;
    }
    Route::domain($currentDomain)->group(function () use ($domain, $domainRoutes, $resourceContainer) {
        foreach ($domainRoutes['routes'] as $route) {
            $resourceContainer->setRoute($route, $domain, $domainRoutes);
        }
    });
}

Route::get('/tool', '\ModuleWebsite\Controllers\ToolController@tool')->name('tool.tool');
Route::get('/toolbar_{sort}', '\ModuleWebsite\Controllers\ToolController@tool')->name('tool.tool');

/*$routes = [
    'subject' => [
        'routes' => ['', 'human', 'info', 'knowledge', 'product', 'shop', 'store', 'league'],
    ],
    'brand' => [
        'routes' => ['', 'detail', 'product', 'product', 'shop', 'store'],
    ],
    'pet' => [
        'routes' => ['', 'special-list', 'special-show-{id}', 'pet-home/{code?}', 'pet-list/{code?}', 'pet-show-{id}', 'info-home/{code?}', 'info-list/{code?}', 'info-show-{id}'],
    ],
    'guide' => [
        'routes' => ['', 'vote', 'show-store-{id}', 'show-knowledge-{id}', 'show-shop-{id}', 'show-league-{id}', 'show-human-{id}', 'show-info-{id}'],
    ],
    'culture' => [
        'routes' => ['', 'listinfo', 'list/{code}/{page?}', 'show-{id}', 'test'],
        'list/{code}/{page?}' => ['action' => 'listinfo'],
    ]*
];*/
/*Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');
Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');*/
