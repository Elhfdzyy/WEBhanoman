<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        if (!Session::has('user')) {
            return redirect('login'); // Redirect ke halaman login
        }

        return $next($request);
    }

    protected $routeMiddleware = [
        // Middleware lainnya...
        'checkUserSession' => \App\Http\Middleware\CheckUserSession::class,
    ];
    
}
