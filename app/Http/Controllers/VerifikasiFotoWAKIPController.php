<?php

namespace App\Http\Controllers;

use App\Models\TabelDataFotoModel;
use App\Models\TabelDataGrupWaModel;
use App\Models\TabelDataKipModel;
use App\Models\TabelDataSiswaModel;
use Auth;
use Illuminate\Http\Request;

class VerifikasiFotoWAKIPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cariDataSiswaSesuaiId(Request $request)
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


        return view('verifikator.VerifikasiDataFotoDanWA', compact('data'));
    }

    public function next(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->next;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataFotoDanWA', compact('data'));
    }

    public function back(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->back;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataFotoDanWA', compact('data'));
    }

    public function simpanDataVerifikasiFotoWAKIP(Request $request)
    {
        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_foto_status' => ['nullable', 'string'],
            'tb_data_foto_alasan' => ['nullable', 'string'],
            'tb_data_user_verifikator_id_verifikasi_grup_wa' => ['nullable', 'string'],
            'tb_data_grup_wa_status' => ['nullable', 'string'],
            'tb_data_grup_wa_alasan' => ['nullable', 'string'],
            'tb_data_user_verifikator_id_verifikasi_kip' => ['nullable', 'string'],
            'tb_data_kip_status' => ['nullable', 'string'],
            'tb_data_kip_alasan' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_foto_status'] = isset($validasiData['tb_data_foto_status']) ? $validasiData['tb_data_foto_status'] : null;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id_verifikasi_grup_wa'] = !empty($validasiData['tb_data_user_verifikator_id_verifikasi_grup_wa']) ? $validasiData['tb_data_user_verifikator_id_verifikasi_grup_wa'] : null;
        $validasiData['tb_data_grup_wa_status'] = isset($validasiData['tb_data_grup_wa_status']) ? $validasiData['tb_data_grup_wa_status'] : null;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id_verifikasi_kip'] = !empty($validasiData['tb_data_user_verifikator_id_verifikasi_kip']) ? $validasiData['tb_data_user_verifikator_id_verifikasi_kip'] : null;
        $validasiData['tb_data_kip_status'] = isset($validasiData['tb_data_kip_status']) ? $validasiData['tb_data_kip_status'] : null;



        //update di table_data_foto
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $data_update_table_data_foto = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_foto_status' => $validasiData['tb_data_foto_status'] ?? null,
            'tb_data_foto_alasan' => $validasiData['tb_data_foto_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_foto = TabelDataFotoModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($data_update_table_data_foto);




        //update di table_data_grup_wa
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $data_update_table_data_grup_wa = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id_verifikasi_grup_wa'] ?? null,
            'tb_data_grup_wa_status' => $validasiData['tb_data_grup_wa_status'] ?? null,
            'tb_data_grup_wa_alasan' => $validasiData['tb_data_grup_wa_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_grup_wa = TabelDataGrupWaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($data_update_table_data_grup_wa);




        //update di table_data_kip
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $data_update_table_data_kip = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id_verifikasi_kip'] ?? null,
            'tb_data_kip_status' => $validasiData['tb_data_kip_status'] ?? null,
            'tb_data_kip_alasan' => $validasiData['tb_data_kip_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_kip = TabelDataKipModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($data_update_table_data_kip);



        if ($update_table_data_foto && $update_table_data_grup_wa && $update_table_data_kip) {

            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataFotoDanWA', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'ggl';
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
