<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek jika user belum login dan bukan di halaman login
        if (!auth()->check() && !$request->is('login')) {
            return redirect('/login');
        }

        // Jika sudah login dan mencoba akses login page
        if (auth()->check() && $request->is('login')) {
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
}
