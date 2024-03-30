<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna telah masuk
        if (Auth::check()) {
            // Cek guard yang digunakan
            $guard = Auth::guard()->getName();

            // Cek guard apakah userDaftar atau verifikator
            if ($guard == 'userDaftar' || $guard == 'verifikator') {
                // Lanjutkan permintaan jika guard adalah userDaftar atau verifikator
                return $next($request);
            }
        }

        // Redirect jika pengguna belum masuk atau guard tidak sesuai
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }
}
