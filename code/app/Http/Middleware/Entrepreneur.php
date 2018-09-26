<?php

namespace App\Http\Middleware;

use Closure;

class Entrepreneur
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
        if ($request->user()->role > 3) {
            abort(404);
        }
        return $next($request);
    }
}
