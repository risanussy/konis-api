<?php

use App\Models\Peralatan;
use App\Models\Suratmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonisController;
use App\Http\Controllers\SpektekController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\TelegramMasukController;
use App\Http\Controllers\TelegramKeluarController;
use App\Http\Controllers\PemeliharaanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Spektek
Route::get('/spektek', [SpektekController::class, 'index']);
Route::post('/spektek/add', [SpektekController::class, 'store']);
Route::get('/spektek/{spektek}', [SpektekController::class, 'show']);
Route::post('/spektek/update/{spektek}', [SpektekController::class, 'update']);
Route::delete('/spektek/delete/{spektek}', [SpektekController::class, 'destroy']);

//Konis
Route::get('/konis', [KonisController::class, 'index']);
Route::post('/konis/add', [KonisController::class, 'store']);
Route::get('/konis/{konis}', [KonisController::class, 'show']);
Route::post('/konis/update/{konis}', [KonisController::class, 'update']);
Route::delete('/konis/delete/{konis}', [KonisController::class, 'destroy']);

//Peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/peminjaman/add', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/{pinjam}', [PeminjamanController::class, 'show']);
Route::post('/peminjaman/update/{pinjam}', [PeminjamanController::class, 'update']);
Route::delete('/peminjaman/delete/{pinjam}', [PeminjamanController::class, 'destroy']);

//Pemeliharaan
Route::get('/pemeliharaan', [PemeliharaanController::class, 'index']);
Route::post('/pemeliharaan/add', [PemeliharaanController::class, 'store']);
Route::get('/pemeliharaan/{pp}', [PemeliharaanController::class, 'show']);
Route::post('/pemeliharaan/update/{pp}', [PemeliharaanController::class, 'update']);
Route::delete('/pemeliharaan/delete/{pp}', [PemeliharaanController::class, 'destroy']);

//Perlatan Luar
Route::get('/peralatan_diluar', [PeralatanController::class, 'index']);
Route::post('/peralatan_diluar/add', [PeralatanController::class, 'store']);
Route::get('/peralatan_diluar/{peralatan}', [PeralatanController::class, 'show']);
Route::post('/peralatan_diluar/update/{peralatan}', [PeralatanController::class, 'update']);
Route::delete('/peralatan_diluar/delete/{peralatan}', [PeralatanController::class, 'destroy']);

//Surat masuk
Route::get('/suratMasuk', [TelegramMasukController::class, 'index']);
Route::post('/suratMasuk/add', [TelegramMasukController::class, 'store']);
Route::get('/suratMasuk/{suratmasuk}', [TelegramMasukController::class, 'show']);
Route::post('/suratMasuk/update/{suratmasuk}', [TelegramMasukController::class, 'update']);
Route::delete('/suratMasuk/delete/{suratmasuk}', [TelegramMasukController::class, 'destroy']);

//Surat Keluar
Route::get('/suratkeluar', [TelegramKeluarController::class, 'index']);
Route::post('/suratkeluar/add', [TelegramKeluarController::class, 'store']);
Route::get('/suratkeluar/{suratkeluar}', [TelegramKeluarController::class, 'show']);
Route::post('/suratkeluar/update/{suratkeluar}', [TelegramKeluarController::class, 'update']);
Route::delete('/suratkeluar/delete/{suratkeluar}', [TelegramKeluarController::class, 'destroy']);