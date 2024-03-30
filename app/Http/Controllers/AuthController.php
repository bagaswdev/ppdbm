<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function home()
    {

        // return 'home';
        return view('auth.home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function actionLogin(Request $request)
    {
        // Validasi
        $validasiData = $request->validate([
            'tb_data_user_nik' => ['required', 'string'],
            'password'    => ['required', 'string'],
        ], [
            'tb_data_user_nik.required' => 'NIK harus diisi.',
            'tb_data_user_nik.string' => 'NIK harus string.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus string.',
        ]);

        if (Auth::guard('pesertaDidik')->attempt($validasiData)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'tb_data_user_nik' => 'The provided credentials do not match our records.',
        ])->onlyInput('tb_data_user_nik');
    }

    public function loginVerifikator()
    {

        return view('auth.loginVerifikator');
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


        if (Auth::guard('verifikator')->attempt($validasiData)) {
            $request->session()->regenerate();
            return redirect()->route('dashboardVerifikasi');
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('success', 'Berhasil Logout');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
