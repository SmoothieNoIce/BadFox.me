<?php

namespace App\Http\Middleware;

use Closure;

class ForceHttpsMiddleware{
    public function handle($request, Closure $next){

        Request::setTrustedProxies([$request->getClientIp()]);


        return $next($request);
    }
}