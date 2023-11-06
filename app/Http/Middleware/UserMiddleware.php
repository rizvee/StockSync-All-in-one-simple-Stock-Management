<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform tasks before a user-related request enters the application.
        // This can include validation, logging, or any custom checks.

        // For example, you might want to check if the user is authenticated.
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to access this page.');
        }

        // Continue the request if all checks pass.
        return $next($request);
    }
}
