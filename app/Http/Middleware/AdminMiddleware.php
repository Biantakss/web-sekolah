<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminMiddleware extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('teacher')->check() && Auth::guard('teacher')->user()->isAdmin()) {
            return $next($request);
        }
        return redirect()->route('teacher.login')->with('error', 'Unauthorized access.');
    }
}
