<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isVerifikator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('verifikator')->check() || Auth::guard('pesertaDidik')->check()) {
            return redirect()->back(); // Mengembalikan ke halaman sebelumnya jika guard true
        }

        return $next($request); // Lanjutkan request jika guard false
    }
}
