<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPendaftar;
use App\Models\User;
use App\Models\Verifikasi;

class DataPendaftarController extends Controller
{

    public function dashboard()
    {

        return view('dashboard');
    }

    public function detail()
    {
        //$hasilCari = DataPendaftar::first();

        $hasilCari = null;

        $noPendaftaranSekarang = null;

        $verifikasiSementara = null;

        return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara'));
    }

    public function cari(Request $request)
    {
        $noPendaftaran = $request->noPendaftaran;

        $noPendaftaranSekarang = $noPendaftaran;

        $verifikasiSementara = DataPendaftar::with('relasi_ke_verifikasi')
            ->where('no_pendaftaran', $noPendaftaranSekarang)
            ->get();


        if ($verifikasiSementara->isEmpty()) {
            $verifikasiSementara = null;
            $namaVerificator = null;
        } else {
            $id_verificator = $verifikasiSementara[0]->relasi_ke_verifikasi->id_verificator;

            $namaVerificator = User::with('relasi_ke_verifikasi')
                ->where('id_verificator', $id_verificator)
                ->first();
        }


        $hasilCari = DataPendaftar::with('relasi_data_ayah', 'relasi_data_ibu', 'relasi_nilai_rapor', 'relasi_berkas_prestasi', 'relasi_link_berkas')
            ->where('no_pendaftaran', $noPendaftaranSekarang)
            ->get();

        if ($hasilCari->count() === 0) {
            // Jika data tidak ditemukan, kembalikan tampilan tanpa data
            return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara', 'namaVerificator'))->with('alert', 'No Pendaftaran not found.');
        }

        return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara', 'namaVerificator'));
    }

    public function cariNext(Request $request)
    {

        $noPendaftaran = $request->noPendaftaran;
        // Konversi nilai menjadi integer dan tambahkan 1
        $noPendaftaranPlusOne = (int)$noPendaftaran + 1;


        $hasilCari = DataPendaftar::where('no_pendaftaran', $noPendaftaranPlusOne)->get();

        $noPendaftaranSekarang = $noPendaftaranPlusOne;

        $verifikasiSementara = DataPendaftar::with('relasi_ke_verifikasi')
            ->where('no_pendaftaran', $noPendaftaranSekarang)
            ->get();

        if ($verifikasiSementara->isEmpty()) {
            $verifikasiSementara = null;
            $namaVerificator = null;
        } else {
            if ($verifikasiSementara[0]->relasi_ke_verifikasi == null) {
                $verifikasiSementara = null;
                $namaVerificator = null;
            } else {
                $id_verificator = $verifikasiSementara[0]->relasi_ke_verifikasi->id_verificator;
                $namaVerificator = User::with('relasi_ke_verifikasi')
                    ->where('id_verificator', $id_verificator)
                    ->first();
            }
        }

        return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara', 'namaVerificator'));
    }

    public function cariBack(Request $request)
    {
        $noPendaftaran = $request->noPendaftaran;
        // Konversi nilai menjadi integer dan tambahkan 1
        $noPendaftaranMinOne = (int)$noPendaftaran - 1;

        $noPendaftaranSekarang = $noPendaftaranMinOne;
        $verifikasiSementara = DataPendaftar::with('relasi_ke_verifikasi')
            ->where('no_pendaftaran', $noPendaftaranSekarang)
            ->get();

        if ($verifikasiSementara->isEmpty()) {
            $verifikasiSementara = null;
            $namaVerificator = null;
        } else {
            if ($verifikasiSementara[0]->relasi_ke_verifikasi == null) {
                $verifikasiSementara = null;
                $namaVerificator = null;
            } else {
                $id_verificator = $verifikasiSementara[0]->relasi_ke_verifikasi->id_verificator;
                $namaVerificator = User::with('relasi_ke_verifikasi')
                    ->where('id_verificator', $id_verificator)
                    ->first();
            }
        }

        $hasilCari = DataPendaftar::where('no_pendaftaran', $noPendaftaranMinOne)->get();

        return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara', 'namaVerificator'));
    }
}
