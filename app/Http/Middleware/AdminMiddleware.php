<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user's role matches the required role
            if (Auth::user()->role === $role) {
                return $next($request);
            }
            // If the user's role does not match, return a 403 Forbidden response
            abort(403, 'Forbidden');
        }
        // If the user is not authenticated, return a 401 Unauthorized response
        abort(401, 'Unauthorized');
    }
}