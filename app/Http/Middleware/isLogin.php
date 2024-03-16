<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Jika sudah login lanjutkan
        if (Auth::check()) {
            return $next($request);
        }

        //Jika belum login, login dulu
        return redirect()->route('login')->withErrors('Silakan login terlebih dahulu!');
    }
}
