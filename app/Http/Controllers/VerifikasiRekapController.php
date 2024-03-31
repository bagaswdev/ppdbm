<?php

namespace App\Http\Controllers;

use App\Models\TabelDataRaportModel;
use App\Models\TabelDataSiswaModel;
use Illuminate\Http\Request;

class VerifikasiRekapController extends Controller
{
    public function RekapCariDataSiswaSesuaiId(Request $request)
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

        return view('verifikator.VerifikasiDataRekap', compact('data'));
    }

    public function RekapNext(Request $request)
    {
        $tb_data_siswa_id_plus_1 = $request->RekapNext;

        $hasil_tb_data_siswa_id_plus_1 = (int)$tb_data_siswa_id_plus_1 + 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_plus_1)->first();
        return view('verifikator.VerifikasiDataRekap', compact('data'));
    }

    public function RekapBack(Request $request)
    {
        $tb_data_siswa_id_minus_1 = $request->RekapBack;

        $hasil_tb_data_siswa_id_minus_1 = (int)$tb_data_siswa_id_minus_1 - 1;

        // $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
        $data = TabelDataSiswaModel::where('tb_data_siswa_id', $hasil_tb_data_siswa_id_minus_1)->first();

        return view('verifikator.VerifikasiDataRekap', compact('data'));
    }

    public function simpanDataVerifikasiRekap(Request $request)
    {

        $validasiData = $request->validate([
            'tb_data_user_verifikator_id' => ['nullable', 'string'],
            'tb_data_raport_status' => ['nullable', 'string'],
            'tb_data_raport_alasan' => ['nullable', 'string'],
            'tb_data_raport_mtk5_smt1' => ['nullable', 'numeric'],
            'tb_data_raport_mtk5_smt2' => ['nullable', 'numeric'],
            'tb_data_raport_mtk6_smt1' => ['nullable', 'numeric'],
            'tb_data_raport_ipa5_smt1' => ['nullable', 'numeric'],
            'tb_data_raport_ipa5_smt2' => ['nullable', 'numeric'],
            'tb_data_raport_ipa6_smt1' => ['nullable', 'numeric'],
            'tb_data_raport_indo5_smt1' => ['nullable', 'numeric'],
            'tb_data_raport_indo5_smt2' => ['nullable', 'numeric'],
            'tb_data_raport_indo6_smt1' => ['nullable', 'numeric'],
        ], [
            'tb_data_user_verifikator_id.string' => 'harus string.',
        ]);

        $tb_data_siswa_id = $request->tb_data_siswa_id;

        // agar ketika kosong di isi null
        $validasiData['tb_data_user_verifikator_id'] = !empty($validasiData['tb_data_user_verifikator_id']) ? $validasiData['tb_data_user_verifikator_id'] : null;
        $validasiData['tb_data_raport_status'] = isset($validasiData['tb_data_raport_status']) ? $validasiData['tb_data_raport_status'] : null;


        //update di update_table_data_kelakuan_baik
        // Ambil nilai kolom yang ingin diupdate dari $validasiData
        $update_table_data_rekap = [
            'tb_data_user_verifikator_id' => $validasiData['tb_data_user_verifikator_id'] ?? null,
            'tb_data_raport_status' => $validasiData['tb_data_raport_status'] ?? null,
            'tb_data_raport_alasan' => $validasiData['tb_data_raport_alasan'] ?? null,
        ];

        // Update data berdasarkan nilai-nilai yang sudah diambil
        $update_table_data_rekap = TabelDataRaportModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update($update_table_data_rekap);


        //Pembenahan
        //Ambil data siswa dari db
        $table_data_raport = TabelDataRaportModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();

        if ($validasiData['tb_data_raport_mtk5_smt1'] === null) {
            $validasiData['tb_data_raport_mtk5_smt1'] = $table_data_raport->tb_data_raport_mtk5_smt1;
        }

        if ($validasiData['tb_data_raport_mtk5_smt2'] === null) {
            $validasiData['tb_data_raport_mtk5_smt2'] = $table_data_raport->tb_data_raport_mtk5_smt2;
        }

        if ($validasiData['tb_data_raport_mtk6_smt1'] === null) {
            $validasiData['tb_data_raport_mtk6_smt1'] = $table_data_raport->tb_data_raport_mtk6_smt1;
        }

        if ($validasiData['tb_data_raport_ipa5_smt1'] === null) {
            $validasiData['tb_data_raport_ipa5_smt1'] = $table_data_raport->tb_data_raport_ipa5_smt1;
        }

        if ($validasiData['tb_data_raport_ipa5_smt2'] === null) {
            $validasiData['tb_data_raport_ipa5_smt2'] = $table_data_raport->tb_data_raport_ipa5_smt2;
        }

        if ($validasiData['tb_data_raport_ipa6_smt1'] === null) {
            $validasiData['tb_data_raport_ipa6_smt1'] = $table_data_raport->tb_data_raport_ipa6_smt1;
        }

        if ($validasiData['tb_data_raport_indo5_smt1'] === null) {
            $validasiData['tb_data_raport_indo5_smt1'] = $table_data_raport->tb_data_raport_indo5_smt1;
        }

        if ($validasiData['tb_data_raport_indo5_smt2'] === null) {
            $validasiData['tb_data_raport_indo5_smt2'] = $table_data_raport->tb_data_raport_indo5_smt2;
        }

        if ($validasiData['tb_data_raport_indo6_smt1'] === null) {
            $validasiData['tb_data_raport_indo6_smt1'] = $table_data_raport->tb_data_raport_indo6_smt1;
        }

        // UPDATE TABEL SISWA
        $data_update_table_data_rekap = TabelDataRaportModel::where('tb_data_siswa_id', $tb_data_siswa_id)->update(['tb_data_raport_mtk5_smt1' => $validasiData['tb_data_raport_mtk5_smt1'],'tb_data_raport_mtk5_smt2' => $validasiData['tb_data_raport_mtk5_smt2'],'tb_data_raport_mtk6_smt1' => $validasiData['tb_data_raport_mtk6_smt1'],'tb_data_raport_ipa5_smt1' => $validasiData['tb_data_raport_ipa5_smt1'],'tb_data_raport_ipa5_smt2' => $validasiData['tb_data_raport_ipa5_smt2'],'tb_data_raport_ipa6_smt1' => $validasiData['tb_data_raport_ipa6_smt1'],'tb_data_raport_indo5_smt1' => $validasiData['tb_data_raport_indo5_smt1'],'tb_data_raport_indo5_smt2' => $validasiData['tb_data_raport_indo5_smt2'],'tb_data_raport_indo6_smt1' => $validasiData['tb_data_raport_indo6_smt1']]);


        if ($update_table_data_rekap && $data_update_table_data_rekap) {
            //tampilkan ke pencarian siswa id barusan
            $data = TabelDataSiswaModel::where('tb_data_siswa_id', $tb_data_siswa_id)->first();
            return view('verifikator.VerifikasiDataRekap', compact('data'))->with('success', 'Berhasil Update Data');
        } else {
            return 'gagal simpan data verifikasi';
        }
    }
}
