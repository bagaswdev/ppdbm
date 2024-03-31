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
        return view('verifikator.VerifikasiDataAkta');
    }

    public function Nisn()
    {
        return view('verifikator.VerifikasiDataNisn');
    }

    public function KK()
    {
        return view('verifikator.VerifikasiDataKK');
    }

    public function Keabsahan()
    {
        return view('verifikator.VerifikasiDataKeabsahan');
    }

    public function Kelakuan()
    {
        return view('verifikator.VerifikasiDataKelakuan');
    }

    public function Rekap()
    {
        return view('verifikator.VerifikasiDataRekap');
    }
}
