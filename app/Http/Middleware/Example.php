<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Example
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (true) {
            # code...
            return $next($request);
        }
        return response('No puedes continuar', 404);
    }
}
