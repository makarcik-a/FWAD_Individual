<?php

// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Проверяем роль пользователя
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect()->route('login')->with('message', 'Unauthorized access');
    }
}

