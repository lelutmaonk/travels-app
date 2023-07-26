<?php

use App\Http\Controllers\KategoriController;
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

// USER
Route::get('/', [UserHomeController::class, 'index']);
Route::get('/paket/{id}', [UserHomeController::class, 'show']);