<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyMe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {

            if (auth()->user()->email == 'aa@aa.com') {
                // Allow the request to proceed
                return $next($request);
            }

            return response(
                content: ['message' => 'Access is not proper!'],
                status: 403
            );
        }

        return response(
            content: ['message' => "You don't have access!"],
            status: 401
        );
    }

}
