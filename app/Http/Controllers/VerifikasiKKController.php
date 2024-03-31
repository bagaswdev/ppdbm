<?php

namespace App\Http\Controllers;

use App\Models\TabelDataKkSiswaModel;
use Illuminate\Http\Request;
use App\Models\TabelDataSiswaModel;

class VerifikasiKKController extends Controller
{
    public function KKCariDataSiswaSesuaiId(Request $request)
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

        return view('verifikator.VerifikasiDataKK', compact('data'));
    }

    public function KKNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->KKNext;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataKK', compact('data'));
    }

    public function KKBack(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->KKBack;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataKK', compact('data'));
    }

    public function simpanDataVerifikasiKK(Request $request)
    {

        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_kk_siswa_status' => ['nullable', 'string'],
            'tb_data_kk_siswa_alasan' => ['nullable', 'string'],
            'tb_data_siswa_nik' => ['nullable', 'string'],
            'tb_data_siswa_tempat_lahir' => ['nullable', 'string'],
            'tb_data_siswa_tanggal_lahir' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_kk_siswa_status'] = isset($validasiData['tb_data_kk_siswa_status']) ? $validasiData['tb_data_kk_siswa_status'] : null;


        //update di update_table_data_kelakuan_baik
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $update_table_data_kk = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_kk_siswa_status' => $validasiData['tb_data_kk_siswa_status'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_kk = TabelDataKkSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($update_table_data_kk);


        //Pembenahan
        //Ambil data siswa dari db
        $table_data_siswa = TabelDataSiswaModel::find($tb_data_siswa_id);

        if ($validasiData['tb_data_siswa_nik'] === null) {
            $validasiData['tb_data_siswa_nik'] = $table_data_siswa->tb_data_siswa_nik;
        }

        if ($validasiData['tb_data_siswa_tempat_lahir'] === null) {
            $validasiData['tb_data_siswa_tempat_lahir'] = $table_data_siswa->tb_data_siswa_tempat_lahir;
        }

        if ($validasiData['tb_data_siswa_tanggal_lahir'] === null) {
            $validasiData['tb_data_siswa_tanggal_lahir'] = $table_data_siswa->tb_data_siswa_tanggal_lahir;
        }


        // UPDATE TABEL SISWA
        $data_update_table_data_siswa = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_siswa_nik' => $validasiData['tb_data_siswa_nik'], 'tb_data_siswa_tempat_lahir' => $validasiData['tb_data_siswa_tempat_lahir'],'tb_data_siswa_tanggal_lahir' => $validasiData['tb_data_siswa_tanggal_lahir']]);


        if ($update_table_data_kk && $data_update_table_data_siswa) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataKK', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
    }
}
