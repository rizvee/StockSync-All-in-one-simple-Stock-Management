<?php

namespace App\Http\Middleware;

use Closure;

class CheckinMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform tasks before a check-in request enters the application.
        // This can include validation, logging, or any custom checks.

        // For example, you might want to check if the user is authenticated before allowing check-ins.
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Continue the request if all checks pass.
        return $next($request);
    }
}
