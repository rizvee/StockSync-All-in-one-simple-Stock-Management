<?php

namespace App\Http\Middleware;

use Closure;

class CustomerMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform tasks before a customer-related request enters the application.
        // This can include validation, logging, or any custom checks.

        // For example, you might want to check if the user has the necessary permissions for managing customers.
        if (!auth()->user()->hasPermission('manage_customers')) {
            return redirect()->route('home')->with('error', 'You do not have permission for managing customers.');
        }

        // Continue the request if all checks pass.
        return $next($request);
    }
}
