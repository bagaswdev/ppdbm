<?php

namespace App\Http\Controllers;

use App\Models\TabelDataSiswaModel;
use Illuminate\Http\Request;

class VerifikasiDataFotoController extends Controller
{
    public function FotoDanWA()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataFotoDanWA', compact('data'));
    }

    public function Akta()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataAkta', compact('data'));
    }

    public function Nisn()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataNisn', compact('data'));
    }

    public function KK()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataKK', compact('data'));
    }

    public function Keabsahan()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataKeabsahan', compact('data'));
    }

    public function Kelakuan()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataKelakuan', compact('data'));
    }

    public function Rekap()
    {
        $data = TabelDataSiswaModel::first();
        return view('verifikator.VerifikasiDataRekap', compact('data'));
    }
}
