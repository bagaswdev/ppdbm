<?php

namespace App\Http\Controllers;

use App\Models\TabelDataKelakuanBaikModel;
use App\Models\TabelDataSiswaModel;
use Illuminate\Http\Request;

class VerifikasiKelakuanController extends Controller
{
    public function KelakuanCariDataSiswaSesuaiId(Request $request)
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

        return view('verifikator.VerifikasiDataKelakuan', compact('data'));
    }

    public function KelakuanNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->KelakuanNext;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataKelakuan', compact('data'));
    }

    public function KelakuanBack(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->KelakuanBack;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataKelakuan', compact('data'));
    }

    public function simpanDataVerifikasiKelakuan(Request $request)
    {

        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_kelakuan_baik_status' => ['nullable', 'string'],
            'tb_data_kelakuan_baik_alasan' => ['nullable', 'string'],
            'tb_data_siswa_sekolah_asal' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_kelakuan_baik_status'] = isset($validasiData['tb_data_kelakuan_baik_status']) ? $validasiData['tb_data_kelakuan_baik_status'] : null;


        //update di update_table_data_kelakuan_baik
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $update_table_data_kelakuan_baik = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_kelakuan_baik_status' => $validasiData['tb_data_kelakuan_baik_status'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_kelakuan_baik = TabelDataKelakuanBaikModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($update_table_data_kelakuan_baik);


        //Pembenahan
        //Ambil data siswa dari db
        $table_data_siswa = TabelDataSiswaModel::find($tb_data_siswa_id);

        if ($validasiData['tb_data_siswa_sekolah_asal'] === null) {
            $validasiData['tb_data_siswa_sekolah_asal'] = $table_data_siswa->tb_data_siswa_sekolah_asal;
        }

        // UPDATE TABEL SISWA
        $data_update_table_data_siswa = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_siswa_sekolah_asal' => $validasiData['tb_data_siswa_sekolah_asal']]);


        if ($update_table_data_kelakuan_baik && $data_update_table_data_siswa) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataKelakuan', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
    }
}
