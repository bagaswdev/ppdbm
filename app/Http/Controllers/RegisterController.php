<?php

namespace App\Http\Controllers;

use App\Models\TabelDataSiswaModel;
use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TabelDataUserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function ProsesDaftarAkun(Request $request)
    {
        $validasiData = $request->validate([
            'tb_data_user_nik'          => ['required', 'numeric'],
            'tb_data_user_nama'         => ['required', 'string', 'max:255'],
            'email'                     => ['required', 'string', 'email', 'unique:table_data_user'],
            'password'                  => ['required', 'string', 'min:5'],
        ], [
            'tb_data_user_nik.required' => "NIK Harus di isi",
            'tb_data_user_nik.numeric' => "NIK Harus nomor",
            'tb_data_user_nama.required' => "Nama Harus di isi",
            'tb_data_user_nama.string' => "Nama Harus karakter",
            'email.required' => "Email Harus di isi",
            'email.email' => "Harus email valid",
            'password.required' => "Password Harus di isi",
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);

        // id tabel user
        $tb_data_user_id = Str::uuid()->toString();
        $validasiData['tb_data_user_id'] = $tb_data_user_id;

        // simpan di tabel user
        TabelDataUserModel::create($validasiData);

        // id tabel siswa

        $TabelDataSiswa['tb_data_siswa_id'] = Str::uuid()->toString();
        $TabelDataSiswa['tb_data_user_id'] = $tb_data_user_id;  //fk dari tabel user
        // simpan di tabel siswa
        TabelDataSiswaModel::create($TabelDataSiswa);


        return redirect()->route('login')->with('success', 'Berhasil Daftar Akun, Silakan Login');
    }
}
