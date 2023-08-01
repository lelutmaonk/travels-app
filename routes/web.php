<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalDetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KetentuanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserHomeController;
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

// Route::get('/', function () {
//     return view('admin.index', [
//         'title' => 'Test'
//     ]);
// });

Route::resource('/admin/master-paket/kategori', KategoriController::class);
Route::resource('/admin/master-paket/paket', PaketController::class);
// Route::resource('/admin/master-paket/ketentuan', KetentuanController::class);

// KETENTUAN
Route::get('/admin/master-paket/ketentuan/{paket:id}', [KetentuanController::class, 'index']);
Route::get('/admin/master-paket/ketentuan/create/{paket:id}', [KetentuanController::class, 'create']);
Route::post('/admin/master-paket/ketentuan', [KetentuanController::class, 'store']);
// JADWAL
Route::get('/admin/master-paket/jadwal/{paket:id}', [JadwalController::class, 'index']);
Route::get('/admin/master-paket/jadwal/create/{paket:id}', [JadwalController::class, 'create']);
Route::post('/admin/master-paket/jadwal', [JadwalController::class, 'store']);
// JADWAL DETAIL
Route::get('/admin/master-paket/jadwal-detail/{jadwal:id}', [JadwalDetailController::class, 'index']);
Route::get('/admin/master-paket/jadwal-detail/create/{jadwal:id}', [JadwalDetailController::class, 'create']);
Route::post('/admin/master-paket/jadwal-detail', [JadwalDetailController::class, 'store']);


// USER
Route::get('/', [UserHomeController::class, 'index']);
Route::get('/paket/{id}', [UserHomeController::class, 'show']);