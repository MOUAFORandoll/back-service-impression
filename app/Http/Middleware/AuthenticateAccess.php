<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::alert($request->header("Authorization"));
        $credentials = [
            'grant_type' => 'password',
            'client_id' => 2,
            'client_secret' => 'EgDwYss1HthxUbAjbRViO0QaNF82gsJIyCiKXiZr'
        ];

        if (in_array($request->header('Authorization'),  $credentials)) {
            return $next($request);
        }
        return $next($request);

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
