<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function actionLogin(Request $request)
    {
        // Validasi
        $validasiData = $request->validate([
            'nik_peserta_didik' => ['required', 'string'],
            'password'    => ['required', 'string'],
        ], [
            'nik_peserta_didik.required' => 'NIK harus diisi.',
            'nik_peserta_didik.string' => 'NIK harus string.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus string.',
        ]);

        if (Auth::guard('userDaftar')->attempt(['tb_data_user_nik' => $request->nik_peserta_didik, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'NIK atau Password salah.');
        }
    }

    public function loginVerifikator()
    {
        // if (Auth::check()) {
        //     return redirect('dashboard');
        // } else {
        return view('auth.loginVerifikator');
        // }
    }



    public function actionLoginVerifikasi(Request $request)
    {
        // Validasi
        $validasiData = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password'    => ['required', 'string'],
        ], [
            'email.required' => 'email harus diisi.',
            'email.string' => 'email harus email.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus string.',
        ]);


        if (Auth::guard('verifikator')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah.');
        }
    }

    public function pengumuman()
    {
        return view('auth.pengumuman');
    }

    public function reguler()
    {
        return view('auth.reguler');
    }

    public function tes2024()
    {
        return view('auth.tes2024');
    }

    public function DaftarUlang()
    {
        return view('auth.DaftarUlang');
    }

    public function monitoring()
    {
        return view('auth.monitoring');
    }

    // public function authenticating(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'username' => ['required'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {

    //         if (Auth::user()->role_id == 1) {
    //             return redirect('dashboard');
    //         }
    //         dd(Auth::user());
    //         //if(Auth::user()->role_id == 2){
    //         //    return redirect('profile');
    //         //}
    //     }
    // }



    //Proses otentikasi
    public function otentikasi(Request $request)
    {
        $credentials = $request->validate([
            'nik_calon_siswa' => ['required', 'email', 'max:16'],
            'password_calon_siswa' => ['required', 'min:5']
        ], [
            'nik.required' => 'nik wajib diisi',
            'nik.max' => 'nik tidak boleh melebihi :max karakter',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal harus :min karakter',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect(route('login'))->withErrors('Username atau password yang dimasukkan tidak valid');
        }
    }

    function logout(Request $request)
    {
        if (Auth::guard('userDaftar')->check()) {
            Auth::guard('userDaftar')->logout();
        } elseif (Auth::guard('verifikator')->check()) {
            Auth::guard('verifikator')->logout();
        }

        return redirect(route('login'))->with('success', 'Berhasil Logout');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
