<?php

namespace App\Http\Middleware;

use Closure;

class SupplierMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform tasks before a supplier-related request enters the application.
        // This can include validation, logging, or any custom checks.

        // For example, you might want to check if the user has the necessary permissions for managing suppliers.
        if (!auth()->user()->hasPermission('manage_suppliers')) {
            return redirect()->route('home')->with('error', 'You do not have permission for managing suppliers.');
        }

        // Continue the request if all checks pass.
        return $next($request);
    }
}
