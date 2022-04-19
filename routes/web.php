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
// ? login
Route::get('/', 'pos\C_login@page_login');
Route::get('/login', 'pos\C_login@page_login');
Route::post('/proseslogin', 'pos\C_login@proseslogin');

Route::get('/logout', 'pos\C_login@proseslogout');


// * register
Route::get('/register', 'pos\C_register@view_regis');
Route::post('/regis', 'pos\C_register@regis');
Route::post('/prosesregis', 'pos\C_register@prosesregis');

// ! Must Login First
Route::middleware(['CekHakAkses'])->group(function () {
    // * Beranda
    Route::get('pos/beranda', 'pos\C_Beranda@viewberanda');
    Route::post('pos/savename', 'pos\C_Beranda@saveName');

    // * Fitur Booking
    Route::get('pos/detail_pesanan/{uniq}', 'pos\C_Locker@viewDetailPesanan');

    //! expired change
    Route::get('pos/detail_pesanan/{id}/{uniq}/{exp}/{waktu}/{kode}', 'pos\C_Locker@expPesanan');
    //!
    //? Confirm
    Route::get('pos/confirm/{id}/{uniq}/{waktu}/{idpesan}', 'pos\C_Locker@confirm');
    //?
    Route::get('pos/booking_locker', 'pos\C_Locker@viewListlocker');
    Route::get('pos/locker/{id}', 'pos\C_Locker@viewLocker');
    Route::post('pos/pesan', 'pos\C_Locker@prosesPesanan');

    // * history
    Route::get('pos/history/{id}', 'pos\C_Locker@viewHistory');
    Route::get('pos/detail_pesanan/{id}/{uniq}', 'pos\C_Locker@viewDetailHistory');
    Route::get('pos/selesai/{id_pesan}/{loker}/{wkt}', 'pos\C_Locker@pesananSelesai');
});
// !
