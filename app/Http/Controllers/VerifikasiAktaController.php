<?php

namespace App\Http\Controllers;

use App\Models\TabelDataAktaModel;
use App\Models\TabelDataAyahVerif;
use App\Models\TabelDataIbuVerif;
use App\Models\TabelDataSiswaModel;
use Auth;
use Illuminate\Http\Request;

class VerifikasiAktaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AktacariDataSiswaSesuaiId(Request $request)
    {
        $validasiData = $request->validate([
            'tb_data_siswa_id' => ['required', 'numeric'],
        ], [
            'tb_data_siswa_id.required' => 'harus diisi.',
            'tb_data_siswa_id.numeric' => 'harus numeric.',
        ]);

        // Ekstrak nilai tb_data_siswa_id dari hasil validasi
        $tb_data_siswa_id = $validasiData['tb_data_siswa_id'];

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        return view('verifikator.VerifikasiDataAkta', compact('data'));
    }

    public function AktaNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->AktaNext;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataNisn', compact('data'));
    }

    public function NISNBack(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->NISNBack;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataNisn', compact('data'));
    }

    public function simpanDataVerifikasiAkta(Request $request)
    {
        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_akta_status' => ['nullable', 'string'],
            'tb_data_akta_alasan' => ['nullable', 'string'],
            'tb_data_siswa_nama' => ['nullable', 'string'],
            'tb_data_siswa_tanggal_lahir' => ['nullable', 'string'],
            'tb_data_ayah_verif_nama' => ['nullable', 'string'],
            'tb_data_ibu_verif_nama' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_akta_status'] = isset($validasiData['tb_data_akta_status']) ? $validasiData['tb_data_akta_status'] : null;


        //update di update_table_data_akta
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $update_table_data_akta = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_akta_status' => $validasiData['tb_data_akta_status'] ?? null,
            'tb_data_akta_alasan' => $validasiData['tb_data_akta_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_akta = TabelDataAktaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($update_table_data_akta);


        //Pembenahan
        //Ambil data siswa dari db
        $table_data_siswa = TabelDataSiswaModel::find($tb_data_siswa_id);

        if ($validasiData['tb_data_siswa_nama'] === null) {
            $validasiData['tb_data_siswa_nama'] = $table_data_siswa->tb_data_siswa_nama;
        }

        if($validasiData['tb_data_siswa_tanggal_lahir'] === null){
            $validasiData['tb_data_siswa_tanggal_lahir'] = $table_data_siswa->tb_data_siswa_tanggal_lahir;
        }

        if($validasiData['tb_data_ayah_verif_nama'] === null){
            $validasiData['tb_data_ayah_verif_nama'] = $table_data_siswa->relasi_ke_table_ayah_verif->tb_data_ayah_verif_nama;
        }

        if($validasiData['tb_data_ibu_verif_nama'] === null){
            $validasiData['tb_data_ibu_verif_nama'] = $table_data_siswa->relasi_ke_table_ibu_verif->tb_data_ibu_verif_nama;
        }

        // UPDATE TABEL SISWA
        $data_update_table_data_siswa = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_siswa_nama' => $validasiData['tb_data_siswa_nama'], 'tb_data_siswa_tanggal_lahir' => $validasiData['tb_data_siswa_tanggal_lahir']]);
        // UPDATE TABEL AYAH VERIF
        $data_update_table_data_ayah_verif = TabelDataAyahVerif::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_ayah_verif_nama' => $validasiData['tb_data_ayah_verif_nama']]);
        // UPDATE TABEL IBU VERIF
        $data_update_table_data_ibu_verif =TabelDataIbuVerif::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_ibu_verif_nama' => $validasiData['tb_data_ibu_verif_nama']]);


        if ($update_table_data_akta && $data_update_table_data_siswa && $data_update_table_data_ibu_verif) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataAkta', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
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
