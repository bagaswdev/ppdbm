<?php

namespace App\Http\Controllers;

use App\Models\TabelDataNisnModel;
use App\Models\TabelDataSiswaModel;
use Illuminate\Http\Request;

class VerifikasiNISNController extends Controller
{
    public function NISNCariDataSiswaSesuaiId(Request $request)
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

        return view('verifikator.VerifikasiDataNisn', compact('data'));
    }

    public function NISNNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->NISNNext;

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

    public function simpanDataVerifikasiNISN(Request $request)
    {

        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_nisn_status' => ['nullable', 'string'],
            'tb_data_nisn_alasan' => ['nullable', 'string'],
            'tb_data_siswa_nisn' => ['nullable', 'string'],
            'tb_data_siswa_jenis_kelamin' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_nisn_status'] = isset($validasiData['tb_data_nisn_status']) ? $validasiData['tb_data_nisn_status'] : null;
        $validasiData['tb_data_siswa_jenis_kelamin'] = isset($validasiData['tb_data_siswa_jenis_kelamin']) ? $validasiData['tb_data_siswa_jenis_kelamin'] : null;


        //update di update_table_data_nisn
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $update_table_data_nisn = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_nisn_status' => $validasiData['tb_data_nisn_status'] ?? null,
            'tb_data_nisn_alasan' => $validasiData['tb_data_nisn_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_nisn = TabelDataNisnModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($update_table_data_nisn);


        //Pembenahan
        //Ambil data siswa dari db
        $table_data_siswa = TabelDataSiswaModel::find($tb_data_siswa_id);

        if ($validasiData['tb_data_siswa_nisn'] === null) {
            $validasiData['tb_data_siswa_nisn'] = $table_data_siswa->tb_data_siswa_nisn;
        }

        if($validasiData['tb_data_siswa_jenis_kelamin'] === null){
            $validasiData['tb_data_siswa_jenis_kelamin'] = $table_data_siswa->tb_data_siswa_jenis_kelamin;
        }


        // UPDATE TABEL SISWA
        $data_update_table_data_siswa = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_siswa_nisn' => $validasiData['tb_data_siswa_nisn'], 'tb_data_siswa_jenis_kelamin' => $validasiData['tb_data_siswa_jenis_kelamin']]);


        if ($update_table_data_nisn && $data_update_table_data_siswa) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataNisn', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
    }


}
