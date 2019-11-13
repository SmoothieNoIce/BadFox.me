<?php

namespace App\Http\Middleware;

use Closure;

class ForceHttpsMiddleware{
    public function handle($request, Closure $next){

        if (!$request->secure() && App::environment() === 'production') {//optionally disable for localhost development
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}