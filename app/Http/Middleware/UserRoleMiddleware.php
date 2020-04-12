<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class UserRoleMiddleware
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
        View::share(['role' => 'user']);
        return $next($request);
    }
}
