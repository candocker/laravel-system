<?php

use Illuminate\Support\Facades\Route;
use Framework\Baseapp\Helpers\ResourceContainer;

$resourceContainer = app()->make(ResourceContainer::class);

$routes = [
    'culture' => [
        //'routes' => ['list/{code}/{page?}'],
        //'list/{code}/{page?}' => ['action' => 'listinfo'],

        /*'routes' => ['', 'graphic', 'graphic-{sort}-{extcode}', 'graphic-{sort}', 'timeline', 'timeline-{sort}-{extcode}', 'timeline-{sort}', '{code}'],
        'timeline' => ['action' => 'timeline'],
        'timeline-{sort}' => ['action' => 'timeline'],
        'timeline-{sort}-{extcode}' => ['action' => 'timeline'],*/

        'routes' => ['', 'timeline', 'human-{code}', 'book-{code}', 'dynasty-{code}', 'series', 'series-{sort}-{volumeId}', 'series-{sort}', 'luxun-works', 'luxun-resume', 'dev-view', 'dev-view'],
        'series' => ['action' => 'series'],
        'series-{sort}' => ['action' => 'series'],
        'series-{sort}-{volumeId}' => ['action' => 'series'],
        'dev-view' => ['action' => 'view'],
        'human-{code}' => ['action' => 'human'],
        'dynasty-{code}' => ['action' => 'dynasty'],
        'book-{code}' => ['action' => 'book'],
        '{code}' => ['action' => 'home'],

        'timeline' => ['action' => 'timeline'],
    ],
    'gather' => [
        'routes' => ['', 'series-{bigsort}-{sort}', '{code}'],
        'series-{bigsort}-{sort}' => ['action' => 'series'],
        '{code}' => ['action' => 'view'],
    ],
    'css' => [
        'routes' => ['', 'check-package', '{code}'],
        'check-package' => ['action' => 'checkPackage'],
        '{code}' => ['action' => 'view'],
    ],
    /*'human' => [
        'routes' => ['', '{code}'],
        '{code}' => ['action' => 'view'],
    ],*/

    'classical' => [
        'routes' => ['', 'book-{code}', 'show-{bookCode}-{chapterCode}', 'test'],
        'book-{code}' => ['controller' => 'classical', 'action' => 'bookCatalogue'],
        'show-{bookCode}-{chapterCode}' => ['controller' => 'classical', 'action' => 'show'],
        'test' => ['controller' => 'classical', 'action' => 'test'],
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
