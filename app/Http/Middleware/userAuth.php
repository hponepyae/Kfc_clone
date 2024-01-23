<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth::user()->role == 'admin') {
          return abort(404);
        };
        return $next($request);
    }
}
