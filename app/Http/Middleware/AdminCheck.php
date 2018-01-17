<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminCheck
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
        if (!(Auth::check() && Auth::user()->isAdmin()))
        {
            return redirect('home')->withErrors('Only Admin has access to this!');
        }
        return $next($request);
    }
}
