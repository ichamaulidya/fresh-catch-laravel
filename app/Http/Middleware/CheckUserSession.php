<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserSession
{
    public function handle($request, Closure $next)
    {
        if (session()->has('user')) {
            return $next($request);
        }

        // Jika session user tidak ada, redirect ke route login
        return redirect()->route('login');
    }
}