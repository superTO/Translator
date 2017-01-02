<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class LangMiddleware
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
        if (! Session::has('locale')) {
            Session::put('locale', config('app.fallback_locale'));
        }
        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
