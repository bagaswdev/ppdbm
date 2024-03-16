<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use App\Models\DataPendaftar;
use Illuminate\Support\Facades\Auth;

class VerifikasiBerkas extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function proses_verifikasi(Request $request)
    {

        // dd($request->all());
        $id_verificator = Auth::user()->id_verificator;

        $data = [
            'id_verificator' => $id_verificator,
            'cFoto' => $request->pas_foto,
            'cAkte' => $request->akte,
            'cNisn' => $request->nisn,
            'cRapot' => $request->rapot,
            'cAbsah' => $request->absah,
            'cKelakuan' => $request->kelakuan,
            'cWa' => $request->grupWA,
            'cParalel' => $request->paralel,
            'cPrestasiUtama' => $request->prestasi_utama,
            'cHafal' => $request->hafal,
            'cKIP' => $request->kip,
            'cRata' => $request->rataRata,
            'cPrestasi1' => $request->prestasiPendukung1,
            'cPrestasi2' => $request->prestasiPendukung2,
            'cVerifikasi' => $request->verifikasi,
            'catatan' => $request->catatan,
        ];


        $no_pendaftaran = $request->no_pendaftaran;
        $noPendaftaranSekarang = $no_pendaftaran;


        $updateVerifikasi = Verifikasi::where('no_pendaftaran', $no_pendaftaran)->update($data);


        if ($updateVerifikasi) {

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

            return view('detail', compact('hasilCari', 'noPendaftaranSekarang', 'verifikasiSementara', 'namaVerificator'));
        } else {
            'gagal';
        }


        //$updateVerifikasi->update($noPendaftaran);


        //$namaCheckbox = implode(', ', $dataVerifikasi['verifikasi']);
        /* $pasFoto = $request->has('pas_foto') ? 1 : 0;
        $akte = $request->has('akte') ? 1 : 0;
        $nisn = $request->has('nisn') ? 1 : 0;
        $rapot = $request->has('rapot') ? 1 : 0;
        $absah = $request->has('absah') ? 1 : 0;
        $kelakuan = $request->has('kelakuan') ? 1 : 0;
        $grupWA = $request->has('grupWA') ? 1 : 0;
        $paralel = $request->has('paralel') ? 1 : 0;
        $prestasi_utama = $request->has('prestasi_utama') ? 1 : 0;
        $hafal = $request->has('hafal') ? 1 : 0;
        $kip = $request->has('kip') ? 1 : 0;
        $rataRata = $request->has('rataRata') ? 1 : 0;
        $prestasiPendukung1 = $request->has('prestasiPendukung1') ? 1 : 0;
        $prestasiPendukung2 = $request->has('prestasiPendukung2') ? 1 : 0;
        $verifikasi = $request->has('verifikasi') ? 1 : 0;
        $catatan = $request->input('catatan');
        $status = $request->input('status');

    // Simpan nilai ke dalam tabel verifikasi
    Verifikasi::create([
        'cFoto' => $pasFoto,
        'cAkte' => $akte,
        'cNisn' => $nisn,
        'cRapot' => $rapot,
        'cAbsah' => $absah,
        'cKelakuan' => $kelakuan,
        'cWA' => $grupWA,
        'cParalel' => $paralel,
        'cPrestasiUtama' => $prestasi_utama,
        'cHafal' => $hafal,
        'cKIP' => $kip,
        'cRata' => $rataRata,
        'cPrestasi1' => $prestasiPendukung1,
        'cPrestasi2' => $prestasiPendukung2,
        'cVerifikasi' => $verifikasi,
        'catatan' => $catatan,
        'status' => $status,
    ]); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
