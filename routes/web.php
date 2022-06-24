<?php

use Illuminate\Support\Facades\Route;
use Framework\Baseapp\Helpers\ResourceContainer;

$resourceContainer = app()->make(ResourceContainer::class);

$routes = [
    'culture' => [
        //'routes' => ['list/{code}/{page?}'],
        //'list/{code}/{page?}' => ['action' => 'listinfo'],

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
        'routes' => ['', 'shijing', 'shijing-{code}', 'zhouyi', 'zhouyi-{code}', 'book-{code}', 'show-{bookCode}-{chapterCode}'],
        'shijing' => ['controller' => 'classical', 'action' => 'scripturesPoetry'],
        'shijing-{code}' => ['controller' => 'classical', 'action' => 'detailPoetry'],
        'zhouyi' => ['controller' => 'classical', 'action' => 'scripturesZhou'],
        'zhouyi-{code}' => ['controller' => 'classical', 'action' => 'detailZhou'],
        'book-{code}' => ['controller' => 'classical', 'action' => 'bookCatalogue'],
        'show-{bookCode}-{chapterCode}' => ['controller' => 'classical', 'action' => 'show'],
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
//echo get_class(Route::domain(config('app.subjectDomain'))) . '---';exit();
foreach ($routes as $domain => $domainRoutes) {
    if ($domainKey != $domain) {
        continue;
    }
    //Route::domain(config('app.subjectDomain'))->attribute('namespace', 'Guide')->group(function () {
    //Route::group(['namespace' => 'Subject'], function () {
    Route::domain($currentDomain)->group(function () use ($domain, $domainRoutes, $resourceContainer) {
        foreach ($domainRoutes['routes'] as $route) {
            $resourceContainer->setRoute($route, $domain, $domainRoutes);
        }
    });
}


/*Route::get('/tv/{id}', 'TvController@show')->name('tv.show');
Route::get('/actors/page/{page?}', 'ActorsController@index');*/
