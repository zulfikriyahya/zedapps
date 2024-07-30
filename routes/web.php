<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('apps/website/index');
});
Route::get('/daftar', function () {
    return view('apps/daftar/index');
});
Route::get('/jurnal', function () {
    return view('apps/jurnal/index');
});
Route::get('/kelulusan', function () {
    return view('apps/kelulusan/index');
});
Route::get('/layanan', function () {
    return view('apps/layanan/index');
});
Route::get('/penilaian', function () {
    return view('apps/penilaian/index');
});
Route::get('/perpustakaan', function () {
    return view('apps/perpustakaan/index');
});
Route::get('/presensi', function () {
    return view('apps/presensi/index');
});
Route::get('/raport', function () {
    return view('apps/raport/index');
});
Route::get('/surat', function () {
    return view('apps/surat/index');
});
Route::get('/pembayaran', function () {
    return view('apps/pembayaran/index');
});
Route::get('/koperasi', function () {
    return view('apps/koperasi/index');
});