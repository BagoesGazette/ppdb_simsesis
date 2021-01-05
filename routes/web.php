<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\UnggahDokumenController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PendaftarController;
use App\Http\Controllers\admin\VerifikasiController;
use App\Http\Controllers\admin\StatusController;
use App\Http\Controllers\admin\KesiswaanController;
use App\Http\Controllers\admin\EkstrakulikulerController;
use App\Http\Controllers\admin\UploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/register', [AuthenticationController::class, 'create'])->name("register");
Route::post('/postRegister', [AuthenticationController::class, 'store'])->name("postRegister");
Route::get('/login', [AuthenticationController::class, 'index'])->name("login");
Route::get('/adminLogin', [AuthenticationController::class, 'adminLogin'])->name("adminLogin");
Route::post('/postLogin', [AuthenticationController::class, 'postLogin'])->name("postLogin");
Route::post('/postAdmin', [AuthenticationController::class, 'postAdmin'])->name("postAdmin");
Route::get('/logout', [AuthenticationController::class, 'logout'])->name("logout");


Route::group(['middleware' => ['auth','CekLevel:siswa']], function () {
    // data pribadi
    Route::get('/dataPribadi', [DataPribadiController::class, 'index'])->name("dataPribadi");
    Route::get('/lihatData', [DataPribadiController::class, 'show'])->name("lihatData");
    Route::post('/postDataPribadi', [DataPribadiController::class, 'store'])->name("postDataPribadi");
    // data orangtua
    Route::get('/dataOrangTua', [DataOrangTuaController::class, 'index'])->name("dataOrangTua");
    Route::get('/lihatDataOrangTua', [DataOrangTuaController::class, 'show'])->name("lihatDataOrangTua");
    Route::post('/postDataOrangTua', [DataOrangTuaController::class, 'store'])->name("postDataOrangTua");
    // data sekolah
    Route::get('/dataSekolah', [DataSekolahController::class, 'index'])->name("dataSekolah");
    Route::get('/lihatDataSekolah', [DataSekolahController::class, 'show'])->name("lihatDataSekolah");
    Route::post('/postDataSekolah', [DataSekolahController::class, 'store'])->name("postDataSekolah");
    // data semester
    Route::get('/dataNilai', [NilaiController::class, 'index'])->name("dataNilai");
    Route::get('/lihatNilai', [NilaiController::class, 'show'])->name("lihatNilai");
    Route::post('/semester1', [NilaiController::class, 'semester1'])->name("semester1");
    Route::post('/semester2', [NilaiController::class, 'semester2'])->name("semester2");
    Route::post('/semester3', [NilaiController::class, 'semester3'])->name("semester3");
    Route::post('/semester4', [NilaiController::class, 'semester4'])->name("semester4");
    Route::post('/semester5', [NilaiController::class, 'semester5'])->name("semester5");
    // dokumen
    Route::get('/dataDokumen', [UnggahDokumenController::class, 'index'])->name("dataDokumen");
    Route::get('/lihatDokumen', [UnggahDokumenController::class, 'show'])->name("lihatDokumen");
    Route::post('/storeDokumen', [UnggahDokumenController::class, 'store'])->name("storeDokumen");
    // pdf
    Route::get('/cetakPDF', [CetakController::class, 'index'])->name("cetakPDF");
});

Route::group(['middleware' => ['auth','CekLevel:admin']], function () {
    // dashboard
    Route::get('/admin', [DashboardController::class, 'index'])->name("dashboard");
    // pendaftar
    Route::get('/admin/pendaftar', [PendaftarController::class, 'index'])->name("pendaftar");
    Route::get('/admin/showPendaftar/{nama_lengkap}', [PendaftarController::class, 'show'])->name("showPendaftar");
    // verifikasi
    Route::get('/admin/verifikasi', [VerifikasiController::class, 'index'])->name("verifikasi");
    Route::get('/admin/dataVerifikasi1', [VerifikasiController::class, 'dataVerifikasi1'])->name("dataVerifikasi1");
    Route::get('/admin/dataVerifikasi2', [VerifikasiController::class, 'dataVerifikasi2'])->name("dataVerifikasi2");
    Route::get('/admin/dataVerifikasi3', [VerifikasiController::class, 'dataVerifikasi3'])->name("dataVerifikasi3");
    Route::get('/admin/dataVerifikasi4', [VerifikasiController::class, 'dataVerifikasi4'])->name("dataVerifikasi4");
    Route::get('/admin/diterima/{nama_lengkap}', [VerifikasiController::class, 'diterima'])->name("diterima");
    Route::get('/admin/ditolak/{nama_lengkap}', [VerifikasiController::class, 'ditolak'])->name("ditolak");
    // status
    Route::get('/admin/statusTerima', [StatusController::class, 'terima'])->name("statusTerima");
    Route::get('/admin/statusTolak', [StatusController::class, 'tolak'])->name("statusTolak");
});

Route::group(['middleware' => ['auth','CekLevel:adminKesiswaan']], function () {
    // siswa
    Route::get('/kesiswaan', [KesiswaanController::class, 'index'])->name("kesiswaan");
    Route::get('/downloadKesiswaan', [KesiswaanController::class, 'download'])->name("downloadKesiswaan");
    // proker
    Route::get('/proker', [UploadController::class, 'index'])->name("proker");
    Route::get('/createProker', [UploadController::class, 'create'])->name("createProker");
    Route::post('/storeProker', [UploadController::class, 'store'])->name("storeProker");
    Route::get('/downloadProker/{id}',[UploadController::class, 'download'])->name('downloadProker');
});

Route::group(['middleware' => ['auth','CekLevel:adminEkstra,adminKesiswaan']], function () {
    // ekstrakulikuler
    Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name("ekstrakulikuler");
    Route::get('/createEkstrakulikuler',[EkstrakulikulerController::class, 'create'])->name('createEkstrakulikuler');
    Route::post('/storeEkstrakulikuler',[EkstrakulikulerController::class, 'store'])->name('storeEkstrakulikuler');
    Route::get('/showEkstrakulikuler/{id}',[EkstrakulikulerController::class, 'show'])->name('showEkstrakulikuler');
    Route::post('/updateEkstrakulikuler',[EkstrakulikulerController::class, 'update'])->name('updateEkstrakulikuler');
    Route::get('/destroyEkstrakulikuler/{id}',[EkstrakulikulerController::class, 'destroy'])->name('destroyEkstrakulikuler');
});