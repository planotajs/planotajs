<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Auth;

class LanguageCheck
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
        if(!Auth::guest()){
            if(Auth::user()->language()){
                App::setLocale('lv');
            }
            else{
                App::setLocale('en');
            }
        }
        
        return $next($request);
    }
}
