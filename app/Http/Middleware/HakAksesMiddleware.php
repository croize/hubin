<?php

namespace App\Http\Middleware;

use Closure;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $akses)
    {
      if (auth()->check() && !auth()->user()->akses($akses)) {
        return redirect('error');
      }
        return $next($request);
    }
}
