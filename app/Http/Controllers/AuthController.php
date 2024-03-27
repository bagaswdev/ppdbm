<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect('PemilihanJalur');
        }else{
            return view('auth.login');
        }
    }

    public function loginVerifikator()
    {
        if (Auth::check()){
            return redirect('dashboard');
        }else{
            return view('auth.loginVerifikator');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'tb_data_user_nik' => $request->input('nik_peserta_didik'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($data)) {
            return redirect('PemilihanJalur');
        }else{
            Session::flash('error', 'NIK atau Password Salah');
            return redirect('/');
        }
    }

    public function actionLoginVerifikasi(Request $request)
    {
        $data = [
            'tb_data_user_verifikator_username' => $request->input('username_verifikator'),
            'tb_data_user_verifikator_password' => $request->input('password_verifikator'),
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        } else {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/verifikasi');
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
