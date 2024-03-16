<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilihanJalurController extends Controller
{
    public function PemilihanJalur()
    {
        return view('PemilihanJalur.PemilihanJalur');
    }

    public function PemilihanJalurOpsiReguler(Request $request)
    {

        $validasiData = $request->validate([
            'pemilihan_jalur'                      => ['required', 'string', 'max:255'],
        ], [
            'pemilihan_jalur.required' => 'Kolom pemilihan jalur harus diisi.',
        ]);


        return view('PemilihanJalur.PemilihanJalurOpsiReguler', compact('validasiData'));
    }

    public function CekPemilihanJalurOpsiRegulerJawaban(Request $request)
    {

        $validasiData = $request->validate([
            'pemilihan_jalur_jawaban'                      => ['required', 'string', 'max:255'],
        ], [
            'pemilihan_jalur_jawaban.required' => 'Kolom pemilihan jalur harus diisi.',
        ]);

        if ($validasiData['pemilihan_jalur_jawaban'] === "reguler") {

            //simpan dulu ke tabel pemilihan jalur
            //lalu redirect ke dashboard
            return redirect()->route('dashboard');
        }

        return view('PemilihanJalur.CekPemilihanJalurOpsiRegulerJawaban', compact('validasiData'));
    }

    public function HasilPemilihanJalurOpsiRegulerJawaban(Request $request)
    {


        $validasiData = $request->validate([
            'no_peserta_didik_ex_reguler'                      => ['required', 'numeric', 'max:255'],
        ], [
            'no_peserta_didik_ex_reguler.required' => 'Kolom pemilihan jalur harus diisi.',
        ]);

        dd($validasiData);


        // return view('PemilihanJalur.CekPemilihanJalurOpsiRegulerJawaban', compact('validasiData'));
    }
}
