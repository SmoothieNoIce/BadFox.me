<?php

namespace App\Http\Middleware;

use Closure;

class ForceHttpsMiddleware{
    public function handle($request, Closure $next){

        Request::setTrustedProxies([$request->getClientIp()]);

        if (!$request->isSecure()) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}