<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function form_data_siswa()
    {
        return view('pendaftaran.form_data_siswa');
    }

    public function form_data_ayah_kandung()
    {
        return view('pendaftaran.form_data_ayah_kandung');
    }

    public function form_data_ibu_kandung()
    {
        return view('pendaftaran.form_data_ibu_kandung');
    }

    public function form_data_wali_kandung()
    {
        return view('pendaftaran.form_data_wali');
    }

    public function upload_berkas()
    {
        return view('pendaftaran.upload_berkas');
    }

    public function form_data_raport()
    {
        return view('pendaftaran.form_data_raport');
    }

    public function upload_berkas_akta()
    {
        return view('pendaftaran.upload_berkas_akta');
    }

    public function upload_berkas_kk_siswa()
    {
        return view('pendaftaran.upload_berkas_kk_siswa');
    }

    public function upload_berkas_kk_ayah_kandung()
    {
        return view('pendaftaran.upload_berkas_kk_ayah_kandung');
    }

    public function upload_berkas_kk_ibu_kandung()
    {
        return view('pendaftaran.upload_berkas_kk_ibu_kandung');
    }

    public function upload_berkas_kk_wali()
    {
        return view('pendaftaran.upload_berkas_kk_wali');
    }

    public function upload_berkas_nisn()
    {
        return view('pendaftaran.upload_berkas_nisn');
    }

    public function upload_berkas_foto()
    {
        return view('pendaftaran.upload_berkas_foto');
    }

    public function upload_berkas_kip()
    {
        return view('pendaftaran.upload_berkas_kip');
    }
}
