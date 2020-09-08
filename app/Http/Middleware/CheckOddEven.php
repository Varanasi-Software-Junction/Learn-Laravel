<?php

namespace App\Http\Middleware;

use Closure;

class CheckOddEven
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
		echo "Odd Even Middleware";
        return $next($request);
    }
}
