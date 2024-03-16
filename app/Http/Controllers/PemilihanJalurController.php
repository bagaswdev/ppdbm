<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PemilihanJalurController extends Controller
{
    public function PemilihanJalur()
    {
        return view('PemilihanJalur.PemilihanJalur');
    }

    public function OpsiPemilihanJalur(Request $request)
    {

        $validasiData = $request->validate([
            'pemilihan_jalur'                      => ['required', 'string', 'max:255'],
        ], [
            'pemilihan_jalur.required' => 'Kolom pemilihan jalur harus diisi.',
        ]);

        if ($validasiData['pemilihan_jalur'] === "reguler-pertanyaan") {
            return view('PemilihanJalur.PemilihanJalurOpsiReguler', compact('validasiData'));
        }
        return view('PemilihanJalur.PemilihanJalurAfirmasi', compact('validasiData'));

        return redirect()->route('CekPemilihanJalurOpsiAfirmasiJawaban');
    }


    public function CekPemilihanJalurOpsiRegulerJawaban(Request $request)
    {

        try {
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

            // Kode lanjutan jika validasi berhasil

        } catch (\Illuminate\Validation\ValidationException $e) {
            Session::flash('error', $e->validator->messages()->first());
            return view('PemilihanJalur.PemilihanJalurOpsiReguler');
        }
    }

    public function CekPemilihanJalurOpsiAfirmasiJawaban(Request $request)
    {
        try {
            $validasiData = $request->validate([
                'berkas_kip' => ['required', 'image', 'mimes:png,jpg'],
            ], [
                'berkas_kip.required' => 'Kolom upload berkas kip harus diisi.',
            ]);

            // Kode lanjutan jika validasi berhasil

        } catch (\Illuminate\Validation\ValidationException $e) {
            Session::flash('error', $e->validator->messages()->first());
            return view('PemilihanJalur.PemilihanJalurAfirmasi');
        }



        // return view('dashboard.dashboard', compact('validasiData'));
    }

    public function HasilPemilihanJalurOpsiRegulerJawaban(Request $request)
    {

        try {
            $validasiData = $request->validate([
                'no_peserta_didik_ex_reguler'                      => ['required', 'numeric'],
            ], [
                'no_peserta_didik_ex_reguler.required' => 'Kolom No Peserta harus diisi.',
            ]);

            // dd($validasiData['no_peserta_didik_ex_reguler']);

            if ($validasiData['no_peserta_didik_ex_reguler'] === "100") {
                return redirect()->route('dashboard');
            }


            return view('PemilihanJalur.HasilPemilihanJalurOpsiRegulerJawaban', compact('validasiData'));
            // Kode lanjutan jika validasi berhasil

        } catch (\Illuminate\Validation\ValidationException $e) {
            Session::flash('error', $e->validator->messages()->first());
            return view('PemilihanJalur.CekPemilihanJalurOpsiRegulerJawaban');
        }
    }
}
