<?php

namespace App\Http\Middleware;

use Closure;

class verify
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
        if ($request->user()->type == 0) {
            return redirect('home');
        }

        return $next($request);
    }
}
