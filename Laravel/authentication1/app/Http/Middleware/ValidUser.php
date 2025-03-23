<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {


        echo "<h2 class='text-primary text-center'>We are now in validUser Middleware</h2>";

        echo "<h2 class='text-primary text-center'>" . $role .  "</h2>";


        // if (Auth::check() && Auth::user()->role == $role) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('login');
        // }

        if (Auth::user()->role == $role) {
            return $next($request);
        } elseif (Auth::user()->role === "reader") {
            return redirect()->route('user');
        } else {
            return redirect()->route('login');
        }
    }

    public function terminate(Request $request, Response $response): void
    {
        // echo "<h2 class='text-danger text-center'>We are now in terminate Middleware</h2>";

    }
}
