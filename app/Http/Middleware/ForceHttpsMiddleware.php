<?php

namespace App\Http\Middleware;

use Closure;

class ForceHttpsMiddleware{
    public function handle($request, Closure $next){

        if (!$request->secure()) {//optionally disable for localhost development
            $request->setTrustedProxies( [ $request->getClientIp() ] ); 
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}