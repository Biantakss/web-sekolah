<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->is('student-profile') || $request->is('student/*')) {
                return route('student.login');
            }
            if ($request->is('admin-dashboard') || $request->is('teacher/*')) {
                return route('teacher.login');
            }
            return route('login');
        }
    }

}
