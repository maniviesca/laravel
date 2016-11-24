<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAge
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
        return $next($request);
    }
    public function edad($request, Closure $next)
    {
             if ($request->('age') <= 0) {
            echo "Error, la edad tiene que ser mayor a 0";
        }

        return $next($request);
    }
}
