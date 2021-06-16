<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareAuth = [
    'auth:api',
    Framework\Baseapp\Middleware\AuthUserMiddleware::class,

    //Framework\Baseapp\Helpers\ResourceContainer::class,
    //Framework\Baseapp\Middleware\AuthenticateMiddleware::class,
    //Framework\Baseapp\Middleware\AutoRenewJwtToken::class,
];
$middlewareBackend = array_merge($middlewareAuth, [
    //App\Middleware\BackendMiddleware::class,
    //App\Middleware\PermissionMiddleware::class,
]);

$routes = app()->make(ResourceContainer::class)->initRouteDatas();
/*Router::addGroup('', function () use ($middlewareBackend, $routes) {
    foreach ($routes as $rCode => $rMethods) {
        foreach ($rMethods as $action => $data) {
            echo implode(',', $data['method']) . '==' . $data['path'] . '==' . $data['callback'] . "\n";
            Router::addRoute($data['method'], $data['path'], $data['callback'], ['middleware' => $middlewareBackend, 'routeCode' => $data['code']]);
        }
    }
});*/

foreach ($routes as $app => $aRoutes) {
    if ($app == 'third') {
        continue;
    }
    foreach ($aRoutes as $resourceCode => $rRoutes) {
        foreach ($rRoutes as $routeCode => $routeData) {
            Route::group($middlewareAuth, function() use ($routeData, $app) {
                //echo implode(',', $routeData['method']) . '==' . '/' . $app . $routeData['path'] . '==' . $routeData['callback'] . "\n";
                Route::match($routeData['method'], '/' . $app . $routeData['path'], $routeData['callback']);
            });
        }
    }
}
//exit();


Route::match(['OPTIONS', 'GET', 'POST', 'HEAD'], '/', '\App\Http\Controllers\IndexController@index');
Route::get('/passport/captcha', '\ModulePassport\Controllers\CommonController@captcha');
Route::get('/passport/validate-captcha', '\ModulePassport\Controllers\CommonController@validateCaptcha');
Route::get('/passport/send-code', '\ModulePassport\Controllers\CommonController@sendCode');
Route::get('/passport/validate-code', '\ModulePassport\Controllers\CommonController@validateCode');

Route::addRoute(['GET', 'POST'], '/passport/logout', '\ModulePassport\Controllers\EntranceController@logout');

Route::post('/signup', '\ModulePassport\Controllers\EntranceController@signup');
Route::post('/signupin', '\ModulePassport\Controllers\EntranceController@signupin');
Route::post('/passport/token', '\ModulePassport\Controllers\EntranceController@token');
Route::post('/signin', '\ModulePassport\Controllers\EntranceController@signin');

Route::middleware($middlewareAuth)->get('/passport/myinfo', '\ModulePassport\Controllers\UserController@myinfo');
//Route::get('/passport/myinfo', '\ModulePassport\Controllers\UserController@myinfo');
Route::post('/refresh_token', '\ModulePassport\Controllers\EntranceController@refreshToken', ['middleware' => $middlewareAuth]);
Route::get('/my-routes', '\ModulePassport\Controllers\EntranceController@myRoutes', ['middleware' => $middlewareBackend]);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*$authAttributes = [
    'prefix' => '',
    //'namespace' => 'auth:api',
    'namespace' => 'Auth',
    'middleware' => 'api',
    //'middleware' => 'cors',
];

Route::group($authAttributes, function() {
    Route::post('login', 'AuthController@login');//->name('login'); // 用户名、密码登录接口
    Route::post('refresh', 'AuthController@refresh');
    Route::get('register', 'RegisterController@register');
    Route::match(['get', 'post'], '/action', 'Controller@action');
    //Route::any('/action', 'Controller@action');
});

$authAttributes['middleware'] = ['api', 'auth:api'];

Route::group($authAttributes, function() {
    Route::get('myinfo', 'UserController@myinfo');
    Route::post('logout', 'UserController@logout'); // 注销当前用户
});*/
