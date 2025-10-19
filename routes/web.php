<?php

use Illuminate\Support\Facades\Route;
use Framework\Baseapp\Helpers\ResourceContainer;

$resourceContainer = app()->make(ResourceContainer::class);

$routes = [
    'knowledge' => [
        'routes' => [
            '/', '/{bookCode}/list.html', '/{bookCode}/{chapterCode}.html',
            '/wiki-{type}-{code}.html',
            '/ask-{code}-{detail}.html',
            '/ask-{code}.html',
            '/test-view-{view}',
            '/view-develop-{view}',
            '/ajax-{navCode}-{subNavCode}.html',

            //'/bookstore-{catalogCode}-{volumeId}',
            //'/bookstore-{catalog}',
            //'/bookstore',

            '/history-{subjectCode}-{groupCode}',
            '/history-{subjectCode}',
            '/history',

            /*'/figure-{subjectCode}-{groupCode}',
            '/figure-{subjectCode}',
            '/figure',*/
            //'/format-{navCode}-{subNavCode}',
            '/{navCode}-{subNavCode}',

        ],

        '/ajax-{navCode}-{subNavCode}.html' => ['action' => 'ajaxRequest'],

        '/' => ['action' => 'entrance'],
        '/{bookCode}/list.html' => ['action' => 'bookList'],
        '/{bookCode}/{chapterCode}.html' => ['action' => 'bookDetail'],

        '/wiki-{type}-{code}.html' => ['action' => 'wikiDetail'],
        '/test-view-{view}' => ['action' => 'testView'],

        '/bookstore-{catalog}' => ['action' => 'bookstore'],
        '/bookstore-{catalogCode}-{volumeId}' => ['action' => 'bookstore'],

        '/ask-{code}.html' => ['action' => 'askKnowledge'],
        '/ask-{code}-{detail}.html' => ['action' => 'askKnowledgeDetail'],

        '/history-{subjectCode}' => ['action' => 'history'],
        '/history-{subjectCode}-{groupCode}' => ['action' => 'history'],

        /*'/figure-{subjectCode}' => ['action' => 'figure'],
        '/figure-{subjectCode}-{groupCode}' => ['action' => 'figure'],*/

        '/format-{navCode}-{subNavCode}' => ['action' => 'formatPointData'],
        '/{navCode}-{subNavCode}' => ['action' => 'entrance'],
    ],
    'read' => [
        'routes' => ['', 'read-{sort}', 'readlist-{sort}-{code}', 'readshow-{sort}-{code}-{chpaterCode}', 'book-{code}', 'show-{bookCode}-{chapterCode}', 'deep-{deepCode}'],
        //'routes' => ['read-classical', 'series-{bigsort}-{sort}', 'book-gather-{code}'],

        '' => ['action' => 'readClassical'],
        'read-{sort}' => ['action' => 'readJoin'],
        //'readlist-{sort}-{code}' => ['action' => 'readJoinList'],
        //'readshow-{sort}-{code}-{chpaterCode}' => ['action' => 'readJoinShow'],
        'book-{code}' => ['action' => 'bookCatalogue'],
        'show-{bookCode}-{chapterCode}' => ['action' => 'bookShow'],
        'deep-{deepCode}' => ['action' => 'bookDeep'],

        //'series-{bigsort}-{sort}' => ['action' => 'series'],
        //'book-gather-{code}' => ['action' => 'bookGather'],
    ],

    'navigation' => [
        'routes' => ['', 'rank', 'search', 'tool', 'operation', 'coolsite', 'sub-{sort}'],
        'sub-{sort}' => ['action' => 'subnav'],
    ],
    /*'info' => [
        'routes' => ['', 'show-{id}', '{bigsort}-{sort}'],
        'show-{id}' => ['action' => 'show'],
        '{bigsort}-{sort}' => ['action' => 'categoryList'],
    ],*/

    'try' => [
        //'routes' => ['list/{code}/{page?}'],
        //'list/{code}/{page?}' => ['action' => 'listinfo'],

        'routes' => ['', 'testcss', 'check-package', 'timeline', 'series', 'series-{sort}-{volumeId}', 'series-{sort}', 'dev-view', 'test', '{code}'],
        'series' => ['action' => 'series'],
        'series-{sort}' => ['action' => 'series'],
        'series-{sort}-{volumeId}' => ['action' => 'series'],
        'dev-view' => ['action' => 'view'],
        'timeline' => ['action' => 'timeline'],

        '{code}' => ['action' => 'view'],
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
