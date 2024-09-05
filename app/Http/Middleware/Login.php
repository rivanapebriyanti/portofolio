<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            return $next($request);
        }
        return redirect('/');
    }

//     public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         $user = Auth::user();

//         if ($user->role == 'admin') {
//             return redirect()->route('admin.dashboard');
//         } elseif ($user->role == 'user') {
//             return redirect()->route('user.dashboard');
//         }

//         // Jika ada peran lain
//         // return redirect()->route('other.role.dashboard');
//     }

//     return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
// }
}


