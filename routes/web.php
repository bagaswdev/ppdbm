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
use App\Http\Controllers\VerifikasiDataFotoController;
use App\Http\Controllers\VerifikasiFotoWAKIPController;
use App\Http\Controllers\VerifikasiAktaController;
use App\Http\Controllers\VerifikasiKeabsahanController;
use App\Http\Controllers\VerifikasiKelakuanController;
use App\Http\Controllers\VerifikasiKKController;
use App\Http\Controllers\VerifikasiNISNController;
use App\Http\Controllers\VerifikasiRekapController;
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

Route::get('/DaftarUlang', [AuthController::class, 'DaftarUlang'])->name('DaftarUlang')->middleware('isGuest');
Route::get('/tes2024', [AuthController::class, 'tes2024'])->name('tes2024')->middleware('isGuest');
Route::get('/monitoring', [AuthController::class, 'monitoring'])->name('monitoring')->middleware('isGuest');
Route::get('/reguler', [AuthController::class, 'reguler'])->name('reguler')->middleware('isGuest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/detail', [DataPendaftarController::class, 'detail'])->name('detail')->middleware('isLogin');
Route::post('/cari', [DataPendaftarController::class, 'cari'])->middleware('isLogin');
Route::post('/cariNext', [DataPendaftarController::class, 'cariNext'])->middleware('isLogin');
Route::post('/cariBack', [DataPendaftarController::class, 'cariBack'])->middleware('isLogin');

// PROSES VERIFIKASI
Route::put('/proses_verifikasi', [VerifikasiBerkas::class, 'proses_verifikasi'])->name('proses_verifikasi')->middleware('isLogin');

//Proses authentikasi
Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('cekLogin');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/ProsesOtentikasi', [AuthController::class, 'otentikasi'])->name('otentikasi');


// Proses Daftar Akun
Route::post('/ProsesDaftarAkun', [RegisterController::class, 'ProsesDaftarAkun'])->name('ProsesDaftarAkun');



// PROSES PEMILIHAN JALUR
Route::get('/PemilihanJalur', [PemilihanJalurController::class, 'PemilihanJalur'])->name('PemilihanJalur');
Route::post('/OpsiPemilihanJalur', [PemilihanJalurController::class, 'OpsiPemilihanJalur'])->name('OpsiPemilihanJalur');
Route::post('/CekPemilihanJalurOpsiRegulerJawaban', [PemilihanJalurController::class, 'CekPemilihanJalurOpsiRegulerJawaban'])->name('CekPemilihanJalurOpsiRegulerJawaban');
Route::post('/CekPemilihanJalurOpsiAfirmasiJawaban', [PemilihanJalurController::class, 'CekPemilihanJalurOpsiAfirmasiJawaban'])->name('CekPemilihanJalurOpsiAfirmasiJawaban');
Route::post('/HasilPemilihanJalurOpsiRegulerJawaban', [PemilihanJalurController::class, 'HasilPemilihanJalurOpsiRegulerJawaban'])->name('HasilPemilihanJalurOpsiRegulerJawaban');




//Proses Halaman Dashboard
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('isLogin');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth:pesertaDidik');
Route::get('/dashboardVerifikasi', [DashboardController::class, 'dashboardVerifikasi'])->name('dashboardVerifikasi')->middleware('auth:verifikator');
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


// HALAMAN VERIFIKATOR
Route::get('/verifikasi_data_foto_wa', [VerifikasiDataFotoController::class, 'FotoDanWA'])->name('VerifikasiDataFotoDanWA')->middleware('auth:verifikator');
Route::get('/verifikasi_data_akta', [VerifikasiDataFotoController::class, 'Akta'])->name('VerifikasiDataAkta')->middleware('auth:verifikator');
Route::get('/verifikasi_data_nisn', [VerifikasiDataFotoController::class, 'Nisn'])->name('VerifikasiDataNisn')->middleware('auth:verifikator');
Route::get('/verifikasi_data_kk', [VerifikasiDataFotoController::class, 'KK'])->name('VerifikasiDataKK')->middleware('auth:verifikator');
Route::get('/verifikasi_data_keabsahan', [VerifikasiDataFotoController::class, 'Keabsahan'])->name('VerifikasiDataKeabsahan')->middleware('auth:verifikator');
Route::get('/verifikasi_data_kelakuan', [VerifikasiDataFotoController::class, 'Kelakuan'])->name('VerifikasiDataKelakuan')->middleware('auth:verifikator');
Route::get('/verifikasi_data_rekap', [VerifikasiDataFotoController::class, 'Rekap'])->name('VerifikasiDataRekap')->middleware('auth:verifikator');
// Route::get('/verifikasi_data_foto', [VerifikasiDataFotoController::class, 'index'])->name('VerifikasiDataFoto');
// Route::get('/verifikasi_data_foto', [VerifikasiDataFotoController::class, 'index'])->name('VerifikasiDataFoto');


// HALAMAN LOGIN VERIFIKATOR

Route::get('/verifikasi', [AuthController::class, 'loginVerifikator'])->name('loginVerifikator')->middleware('cekLogin');
Route::post('/actionLoginVerifikasi', [AuthController::class, 'actionLoginVerifikasi'])->name('actionLoginVerifikasi');
Route::post('/ProsesOtentikasiVerifikasi', [AuthController::class, 'otentikasiVerifikasi'])->name('otentikasiVerifikasi');

// MENU VERIFIKASI FOTO WA KIP
Route::post('/cariDataSiswaSesuaiId', [VerifikasiFotoWAKIPController::class, 'cariDataSiswaSesuaiId'])->name('cariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/next', [VerifikasiFotoWAKIPController::class, 'next'])->name('next')->middleware('auth:verifikator');
Route::post('/back', [VerifikasiFotoWAKIPController::class, 'back'])->name('back')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiFotoWAKIP', [VerifikasiFotoWAKIPController::class, 'simpanDataVerifikasiFotoWAKIP'])->name('simpanDataVerifikasiFotoWAKIP')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuFotoWAKIP', [VerifikasiFotoWAKIPController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuFotoWAKIP', [VerifikasiFotoWAKIPController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('auth:verifikator');

// MENU VERIFIKASI AKTA
Route::post('/AktacariDataSiswaSesuaiId', [VerifikasiAktaController::class, 'AktacariDataSiswaSesuaiId'])->name('AktacariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/AktaNext', [VerifikasiAktaController::class, 'AktaNext'])->name('AktaNext')->middleware('auth:verifikator');
Route::post('/AktaBack', [VerifikasiAktaController::class, 'AktaBack'])->name('AktaBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiAkta', [VerifikasiAktaController::class, 'simpanDataVerifikasiAkta'])->name('simpanDataVerifikasiAkta')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuAkta', [VerifikasiAktaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuAkta', [VerifikasiAktaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('auth:verifikator');

// MENU VERIFIKASI NISN
Route::post('/NISNCariDataSiswaSesuaiId', [VerifikasiNISNController::class, 'NISNCariDataSiswaSesuaiId'])->name('NISNCariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/NISNNext', [VerifikasiNISNController::class, 'NISNNext'])->name('NISNNext')->middleware('auth:verifikator');
Route::post('/NISNBack', [VerifikasiNISNController::class, 'NISNBack'])->name('NISNBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiNISN', [VerifikasiNISNController::class, 'simpanDataVerifikasiNISN'])->name('simpanDataVerifikasiNISN')->middleware('auth:verifikator');
// Route::post('/verifikasiMenuNISN', [VerifikasiNISNController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('auth:verifikator');

// MENU VERIFIKASI KK
Route::post('/KKCariDataSiswaSesuaiId', [VerifikasiKKController::class, 'KKCariDataSiswaSesuaiId'])->name('KKCariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/KKNext', [VerifikasiKKController::class, 'KKNext'])->name('KKNext')->middleware('auth:verifikator');
Route::post('/KKBack', [VerifikasiKKController::class, 'KKBack'])->name('KKBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiKK', [VerifikasiKKController::class, 'simpanDataVerifikasiKK'])->name('simpanDataVerifikasiKK')->middleware('auth:verifikator');
//Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('auth:verifikator');
//Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('auth:verifikator');

// MENU VERIFIKASI KEABSAHAN
Route::post('/KeabsahanCariDataSiswaSesuaiId', [VerifikasiKeabsahanController::class, 'KeabsahanCariDataSiswaSesuaiId'])->name('KeabsahanCariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/KeabsahanNext', [VerifikasiKeabsahanController::class, 'KeabsahanNext'])->name('KeabsahanNext')->middleware('auth:verifikator');
Route::post('/KeabsahanBack', [VerifikasiKeabsahanController::class, 'KeabsahanBack'])->name('KeabsahanBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiKeabsahan', [VerifikasiKeabsahanController::class, 'simpanDataVerifikasiKeabsahan'])->name('simpanDataVerifikasiKeabsahan')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('auth:verifikator');

// MENU VERIFIKASI KELAKUAN
Route::post('/KelakuanCariDataSiswaSesuaiId', [VerifikasiKelakuanController::class, 'KelakuanCariDataSiswaSesuaiId'])->name('KelakuanCariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/KelakuanNext', [VerifikasiKelakuanController::class, 'KelakuanNext'])->name('KelakuanNext')->middleware('auth:verifikator');
Route::post('/KelakuanBack', [VerifikasiKelakuanController::class, 'KelakuanBack'])->name('KelakuanBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiKelakuan', [VerifikasiKelakuanController::class, 'simpanDataVerifikasiKelakuan'])->name('simpanDataVerifikasiKelakuan')->middleware('auth:verifikator');
// Route::post('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('auth:verifikator');
// Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('auth:verifikator');

// MENU VERIFIKASI REKAP
Route::post('/RekapCariDataSiswaSesuaiId', [VerifikasiRekapController::class, 'RekapCariDataSiswaSesuaiId'])->name('RekapCariDataSiswaSesuaiId')->middleware('auth:verifikator');
Route::post('/RekapNext', [VerifikasiRekapController::class, 'RekapNext'])->name('RekapNext')->middleware('auth:verifikator');
Route::post('/RekapBack', [VerifikasiRekapController::class, 'RekapBack'])->name('RekapBack')->middleware('auth:verifikator');
Route::post('/simpanDataVerifikasiRekap', [VerifikasiRekapController::class, 'simpanDataVerifikasiRekap'])->name('simpanDataVerifikasiRekap')->middleware('auth:verifikator');
//Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('auth:verifikator');
//Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('auth:verifikator');
