<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //admin filtering
    public function handle($request, Closure $next)
{
     if (Auth::user() &&  Auth::user()->isAdmin() == 1) {
            return $next($request);
     }

    return redirect('/');
}
