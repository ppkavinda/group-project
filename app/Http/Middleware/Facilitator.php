<?php

namespace App\Http\Middleware;

use Closure;

class Facilitator
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
        if ($request->user()->role > 2) {
            abort(401, 'Unauthorized !');
        }
        return $next($request);
    }
}
