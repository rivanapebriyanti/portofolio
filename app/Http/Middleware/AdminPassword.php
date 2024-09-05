<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $password = $request->input('admin_password');

        // Ganti dengan password yang diinginkan
        if ($password !== 'password_khusus') {
            return redirect('/login')->with('error', 'Password salah!');
        }
        return $next($request);
    }
}
