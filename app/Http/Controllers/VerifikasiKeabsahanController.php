<?php

namespace App\Http\Controllers;

use App\Models\TabelDataKeabsahanModel;
use App\Models\TabelDataSiswaModel;
use Illuminate\Http\Request;

class VerifikasiKeabsahanController extends Controller
{
    public function KeabsahanCariDataSiswaSesuaiId(Request $request)
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


        return view('verifikator.VerifikasiDataKeabsahan', compact('data'));
    }

    public function KeabsahanNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->KeabsahanNext;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataKeabsahan', compact('data'));
    }

    public function KeabsahanBack(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->KeabsahanBack;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataKeabsahan', compact('data'));
    }

    public function simpanDataVerifikasiKeabsahan(Request $request)
    {

        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_keabsahan_status' => ['nullable', 'string'],
            'tb_data_keabsahan_alasan' => ['nullable', 'string'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_keabsahan_alasan'] = isset($validasiData['tb_data_keabsahan_alasan']) ? $validasiData['tb_data_keabsahan_alasan'] : null;


        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_keabsahan = TabelDataKeabsahanModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($validasiData);

        if ($update_table_data_keabsahan) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataKeabsahan', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
    }
}
