<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*if($request->isMethod('OPTIONS')){
            $response = response('hello world!!!',200);//解决options问题
        }else{*/
            $response = $next($request);
        //}
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS, DELETE');
        $response->header('Access-Control-Allow-Headers', 'DNT,X-Mx-ReqToken,Keep-Alive,Accept,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Authorization,Content-Disposition,Referer');
        //$response->header('Access-Control-Allow-Credentials', 'false');
        $response->header('Access-Control-Allow-Credentials', 'true');
        return $response;
    }
}
