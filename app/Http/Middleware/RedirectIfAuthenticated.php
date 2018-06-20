<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $checkGuard = Auth::guard($guard)->check();

        if ($checkGuard && $guard == 'admin') {
            return redirect('admin/home');
        }

        if ($checkGuard && $guard === null) {
            return redirect('/home');
        }

        return $next($request);
    }
}
