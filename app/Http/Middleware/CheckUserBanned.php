<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            
            dd($user);
        }

        // Allow the request to proceed
        return $next($request);
    }
}
