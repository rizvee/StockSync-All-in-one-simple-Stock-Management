<?php

namespace App\Http\Middleware;

use Closure;

class CheckoutMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform tasks before a checkout request enters the application.
        // This can include validation, logging, or any custom checks.

        // For example, you might want to check if the user has the necessary permissions for checkouts.
        if (!auth()->user()->hasPermission('checkout')) {
            return redirect()->route('home')->with('error', 'You do not have permission for checkouts.');
        }

        // Continue the request if all checks pass.
        return $next($request);
    }
}
