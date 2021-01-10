<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('log.v_selamatdatang');
});

Route::get('/masuk', function () {
    return view('log.v_masuk');
});

Route::get('/daftarakun', function () {
    return view('log.v_daftarakun');
});

Route::get('/home', function () {
    return view('v_home');
});

Route::get('/kegiatan', function () {
    return view('v_kegiatan');
});

// BOKAR
Route::get('/kegiatan/bokar', function () {
    return view('kegiatan.v_bokar');
});

Route::get('/kegiatan/peserta/bokar', function () {
    return view('kegiatan.v_bokar_peserta');
});

Route::get('/kegiatan/ubah/bokar', function () {
    return view('kegiatan.v_bokar_ubah');
});

Route::get('/kegiatan/tarawih', function () {
    return view('kegiatan.v_tarawih');
});

Route::get('/progres-ibadah', function () {
    return view('v_progresibadah');
});

Route::get('/tambahprogresibadah', function () {
    return view('v_tambahprogresibadah');
});

Route::get('/keuangan', function () {
    return view('v_keuangan');
});
Route::get('/tambahkeuangan', function () {
    return view('v_tambahkeuangan');
});

Route::get('/pendaftaran-akun', function () {
    return view('v_pendaftaranakun');
});

Route::get('/donasi', function () {
    return view('v_donasi');
});

Route::get('/tambahdonasi', function () {
    return view('v_tambahdonasi');
});


// search bar
Route::get('/akun', function () {
    return view('akun.v_akun');
});

Route::get('/editdataakun', function () {
    return view('akun.v_editdataakun');
});

Route::get('/kegiatandiikuti', function () {
    return view('v_kegiatandiikuti');
});

Route::get('/tambahkegiatan', function () {
    return view('v_tambahkegiatan');
});