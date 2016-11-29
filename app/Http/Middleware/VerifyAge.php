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
          $age = $request->route('age');
        if($age > 0)
        {
        return $next($request);
    }
        else return redirect()->to('error');
          
    }
  
}
