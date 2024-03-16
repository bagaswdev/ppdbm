<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemilihanJalurController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifikasiBerkas;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('isGuest');
Route::get('/DaftarUlang', [AuthController::class, 'DaftarUlang'])->name('DaftarUlang')->middleware('isGuest');
Route::get('/tes2024', [AuthController::class, 'tes2024'])->name('tes2024')->middleware('isGuest');
Route::get('/monitoring', [AuthController::class, 'monitoring'])->name('monitoring')->middleware('isGuest');
Route::get('/reguler', [AuthController::class, 'reguler'])->name('reguler')->middleware('isGuest');
// Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('isGuest');
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('isLogin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('isLogin');

Route::get('/detail', [DataPendaftarController::class, 'detail'])->name('detail')->middleware('isLogin');
Route::post('/cari', [DataPendaftarController::class, 'cari'])->middleware('isLogin');
Route::post('/cariNext', [DataPendaftarController::class, 'cariNext'])->middleware('isLogin');
Route::post('/cariBack', [DataPendaftarController::class, 'cariBack'])->middleware('isLogin');

// PROSES VERIFIKASI
Route::put('/proses_verifikasi', [VerifikasiBerkas::class, 'proses_verifikasi'])->name('proses_verifikasi')->middleware('isLogin');

//Proses authentikasi
Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('isGuest');
Route::get('/register', [RegisterController::class, 'register'])->name('register')->middleware('isGuest');
Route::post('/ProsesOtentikasi', [AuthController::class, 'otentikasi'])->name('otentikasi')->middleware('isGuest');

// PROSES PEMILIHAN JALUR
Route::get('/PemilihanJalur', [PemilihanJalurController::class, 'PemilihanJalur'])->name('PemilihanJalur')->middleware('isGuest');
Route::post('/PemilihanJalurOpsiReguler', [PemilihanJalurController::class, 'PemilihanJalurOpsiReguler'])->name('PemilihanJalurOpsiReguler')->middleware('isGuest');
Route::post('/CekPemilihanJalurOpsiRegulerJawaban', [PemilihanJalurController::class, 'CekPemilihanJalurOpsiRegulerJawaban'])->name('CekPemilihanJalurOpsiRegulerJawaban')->middleware('isGuest');
Route::post('/HasilPemilihanJalurOpsiRegulerJawaban', [PemilihanJalurController::class, 'HasilPemilihanJalurOpsiRegulerJawaban'])->name('HasilPemilihanJalurOpsiRegulerJawaban')->middleware('isGuest');


//Proses Halaman Dashboard
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('isLogin');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/form_data_siswa', [PendaftaranController::class, 'form_data_siswa'])->name('form_data_siswa');
Route::get('/form_data_ayah_kandung', [PendaftaranController::class, 'form_data_ayah_kandung'])->name('form_data_ayah_kandung');
Route::get('/form_data_ibu_kandung', [PendaftaranController::class, 'form_data_ibu_kandung'])->name('form_data_ibu_kandung');
Route::get('/form_data_wali_kandung', [PendaftaranController::class, 'form_data_wali_kandung'])->name('form_data_wali_kandung');
Route::get('/form_data_raport', [PendaftaranController::class, 'form_data_raport'])->name('form_data_raport');
Route::get('/upload_berkas_akta', [PendaftaranController::class, 'upload_berkas_akta'])->name('upload_berkas_akta');
Route::get('/upload_berkas_kk_siswa', [PendaftaranController::class, 'upload_berkas_kk_siswa'])->name('upload_berkas_kk_siswa');
Route::get('/upload_berkas_kk_ayah_kandung', [PendaftaranController::class, 'upload_berkas_kk_ayah_kandung'])->name('upload_berkas_kk_ayah_kandung');
Route::get('/upload_berkas_kk_ibu_kandung', [PendaftaranController::class, 'upload_berkas_kk_ibu_kandung'])->name('upload_berkas_kk_ibu_kandung');
Route::get('/upload_berkas_kk_wali', [PendaftaranController::class, 'upload_berkas_kk_wali'])->name('upload_berkas_kk_wali');
Route::get('/upload_berkas_nisn', [PendaftaranController::class, 'upload_berkas_nisn'])->name('upload_berkas_nisn');
Route::get('/upload_berkas_foto', [PendaftaranController::class, 'upload_berkas_foto'])->name('upload_berkas_foto');
Route::get('/upload_berkas_kip', [PendaftaranController::class, 'upload_berkas_kip'])->name('upload_berkas_kip');
Route::get('/upload_berkas', [PendaftaranController::class, 'upload_berkas'])->name('upload_berkas');
