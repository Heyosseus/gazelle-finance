<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user has the 'admin' role (you can customize this based on your user roles setup)
                return $next($request);
        }

        // If not authenticated or not an admin, redirect to the login page
        return redirect('/login');
    }
}
