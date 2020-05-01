<?php

namespace App\Http\Middleware;

use Closure;

class SimpleMiddleware
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
        $request_duplicate = $request->duplicate();
        $request_duplicate->headers->set('costum-header', 'simple');
        return $next($request_duplicate);
    }
}
