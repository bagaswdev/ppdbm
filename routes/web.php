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
Route::get('/verifikasi_data_foto_wa', [VerifikasiDataFotoController::class, 'FotoDanWA'])->name('VerifikasiDataFotoDanWA');
Route::get('/verifikasi_data_akta', [VerifikasiDataFotoController::class, 'Akta'])->name('VerifikasiDataAkta');
Route::get('/verifikasi_data_nisn', [VerifikasiDataFotoController::class, 'Nisn'])->name('VerifikasiDataNisn');
Route::get('/verifikasi_data_kk', [VerifikasiDataFotoController::class, 'KK'])->name('VerifikasiDataKK');
Route::get('/verifikasi_data_keabsahan', [VerifikasiDataFotoController::class, 'Keabsahan'])->name('VerifikasiDataKeabsahan');
Route::get('/verifikasi_data_kelakuan', [VerifikasiDataFotoController::class, 'Kelakuan'])->name('VerifikasiDataKelakuan');
Route::get('/verifikasi_data_rekap', [VerifikasiDataFotoController::class, 'Rekap'])->name('VerifikasiDataRekap');
// Route::get('/verifikasi_data_foto', [VerifikasiDataFotoController::class, 'index'])->name('VerifikasiDataFoto');
// Route::get('/verifikasi_data_foto', [VerifikasiDataFotoController::class, 'index'])->name('VerifikasiDataFoto');


// HALAMAN LOGIN VERIFIKATOR

Route::get('/verifikasi', [AuthController::class, 'loginVerifikator'])->name('loginVerifikator')->middleware('cekLogin');
Route::post('/actionLoginVerifikasi', [AuthController::class, 'actionLoginVerifikasi'])->name('actionLoginVerifikasi');
Route::post('/ProsesOtentikasiVerifikasi', [AuthController::class, 'otentikasiVerifikasi'])->name('otentikasiVerifikasi');


// MENU VERIFIKASI FOTO WA KIP
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');
Route::get('/verifikasiMenuFotoWAKIP', [NamaController::class, 'verifikasiMenuFotoWAKIP'])->name('verifikasiMenuFotoWAKIP')->middleware('cekLogin');

// MENU VERIFIKASI AKTA
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');
Route::get('/verifikasiMenuAkta', [NamaController::class, 'verifikasiMenuAkta'])->name('verifikasiMenuAkta')->middleware('cekLogin');

// MENU VERIFIKASI NISN
Route::get('/verifikasiMenuNISN', [NamaController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('cekLogin');
Route::get('/verifikasiMenuNISN', [NamaController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('cekLogin');
Route::get('/verifikasiMenuNISN', [NamaController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('cekLogin');
Route::get('/verifikasiMenuNISN', [NamaController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('cekLogin');
Route::get('/verifikasiMenuNISN', [NamaController::class, 'verifikasiMenuNISN'])->name('verifikasiMenuNISN')->middleware('cekLogin');

// MENU VERIFIKASI KK
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');
Route::get('/verifikasiMenuKK', [NamaController::class, 'verifikasiMenuKK'])->name('verifikasiMenuKK')->middleware('cekLogin');

// MENU VERIFIKASI KEABSAHAN
Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('cekLogin');
Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('cekLogin');
Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('cekLogin');
Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('cekLogin');
Route::get('/verifikasiMenuKeabsahan', [NamaController::class, 'verifikasiMenuKeabsahan'])->name('verifikasiMenuKeabsahan')->middleware('cekLogin');

// MENU VERIFIKASI KELAKUAN
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');
Route::get('/verifikasiMenuKelakuan', [NamaController::class, 'verifikasiMenuKelakuan'])->name('verifikasiMenuKelakuan')->middleware('cekLogin');

// MENU VERIFIKASI REKAP
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
Route::get('/verifikasiMenuRekap', [NamaController::class, 'verifikasiMenuRekap'])->name('verifikasiMenuRekap')->middleware('cekLogin');
