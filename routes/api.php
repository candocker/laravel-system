<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareCors = [
    'api',
    'cors',
];

$middlewareAuth = [
    'auth:api',
    'cors',
    Framework\Baseapp\Middleware\AuthUserMiddleware::class,

    //Framework\Baseapp\Helpers\ResourceContainer::class,
    //Framework\Baseapp\Middleware\AuthenticateMiddleware::class,
    //Framework\Baseapp\Middleware\AutoRenewJwtToken::class,
];
$middlewareBackend = array_merge($middlewareAuth, [
    Framework\Baseapp\Middleware\BackendMiddleware::class,
    Framework\Baseapp\Middleware\PermissionMiddleware::class,
]);
//print_r($middlewareBackend);exit();

$routes = app()->make(ResourceContainer::class)->initRouteDatas();
//print_R($routes);
foreach ($routes as $app => $aRoutes) {
    foreach ($aRoutes as $resourceCode => $rRoutes) {
        foreach ($rRoutes as $routeCode => $routeData) {
            Route::group($middlewareBackend, function() use ($routeData, $app) {
                //echo implode(',', $routeData['method']) . '==' . '/' . $app . $routeData['path'] . '==' . $routeData['callback'] . "\n";
                Route::match($routeData['method'], '/' . $app . $routeData['path'], $routeData['callback'])->name($routeData['code']);
            });
        }
    }
}

Route::match(['OPTIONS', 'GET', 'POST', 'HEAD'], '/', '\App\Http\Controllers\IndexController@index');
Route::get('/passport/captcha', '\ModulePassport\Controllers\CommonController@captcha');
Route::get('/passport/validate-captcha', '\ModulePassport\Controllers\CommonController@validateCaptcha');
Route::post('/passport/send-code', '\ModulePassport\Controllers\CommonController@sendCode');
Route::get('/passport/validate-code', '\ModulePassport\Controllers\CommonController@validateCode');

Route::addRoute(['GET', 'POST'], '/passport/logout', '\ModulePassport\Controllers\EntranceController@logout');

Route::post('/passport/signup', '\ModulePassport\Controllers\EntranceController@signup');
Route::post('/passport/signupin', '\ModulePassport\Controllers\EntranceController@signupin');
Route::post('/passport/token', '\ModulePassport\Controllers\EntranceController@token');
Route::post('/passport/signin', '\ModulePassport\Controllers\EntranceController@signin');

Route::middleware($middlewareAuth)->get('/passport/myinfo', '\ModulePassport\Controllers\UserController@myinfo');
Route::middleware($middlewareAuth)->post('/passport/refresh-token', '\ModulePassport\Controllers\EntranceController@refresh');
Route::middleware($middlewareBackend)->get('/passport/my-routes', '\ModulePassport\Controllers\EntranceController@myRoutes');

Route::get('/passport/oss-{action}', '\ModulePassport\Controllers\CommonController@oss');
Route::get('/passport/test', '\ModulePassport\Controllers\TestController@test');


//Route::get('/article', '\ModuleWebsite\Controllers\TestController@articleList');
Route::get('/blog/article', '\ModuleWebsite\Controllers\BlogController@articleList');
//Route::get('/blog/article/calendar', '\ModuleWebsite\Controllers\TestController@acalendar');
Route::get('/blog/article/calendar', '\ModuleWebsite\Controllers\BlogController@articleCalendar');
//Route::get('/blog/article/hottest', '\ModuleWebsite\Controllers\TestController@ahot');
Route::get('/blog/article/hottest', '\ModuleWebsite\Controllers\BlogController@articleHottest');
//Route::get('/blog/article/{id}/context', '\ModuleWebsite\Controllers\TestController@articleContext');
Route::get('/blog/article/{id}/context', '\ModuleWebsite\Controllers\BlogController@articleRelate');
//Route::get('/blog/article/{id}', '\ModuleWebsite\Controllers\TestController@article');
Route::get('/blog/article/{id}', '\ModuleWebsite\Controllers\BlogController@articleDetail');
//Route::get('/blog/tag/all', '\ModuleWebsite\Controllers\TestController@tag');
Route::get('/blog/tag', '\ModuleWebsite\Controllers\BlogController@tag');
//Route::get('/tag', '\ModuleWebsite\Controllers\TestController@tag');
Route::get('/blog/tag/hottest', '\ModuleWebsite\Controllers\BlogController@tagHottest');
//Route::get('/option', '\ModuleWebsite\Controllers\TestController@tmp');
//Route::get('/option', '\ModuleWebsite\Controllers\TestController@option');
Route::get('/blog/option', '\ModuleWebsite\Controllers\BlogController@option');

Route::get('/comment', '\ModuleWebsite\Controllers\TestController@comment');
Route::get('/disqus/comment', '\ModuleWebsite\Controllers\TestController@dcomment');
Route::get('/disqus/config', '\ModuleWebsite\Controllers\TestController@disqus');
Route::get('/disqus/user-info', '\ModuleWebsite\Controllers\TestController@userinfo');

//Route::get('/diagram/{id}', '\ModuleWebsite\Controllers\TestController@article');
Route::get('/archive', '\ModuleWebsite\Controllers\TestController@archive');
Route::get('/expansion/statistic', '\ModuleWebsite\Controllers\TestController@statistic');
Route::get('/announcement', '\ModuleWebsite\Controllers\TestController@announce');
Route::get('/auth/admin', '\ModuleWebsite\Controllers\TestController@admin');
Route::get('/category', '\ModuleWebsite\Controllers\TestController@category');



/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*$authAttributes = [
    'prefix' => '',
    'namespace' => 'Auth',
    //'middleware' => 'cors',
];

Route::group($authAttributes, function() {
    Route::post('login', 'AuthController@login');//->name('login'); // 用户名、密码登录接口
    Route::post('refresh', 'AuthController@refresh');
    Route::get('register', 'RegisterController@register');
});*/
