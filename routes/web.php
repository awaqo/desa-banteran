<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
//     return view('welcome');
// });

Route::controller(MainController::class)->group(function() {
    Route::get('/', 'index')->name('beranda');
    Route::get('informasi', 'informasi')->name('informasi');
    Route::get('layanan', 'layanan')->name('layanan');
    Route::get('profil/visi-misi', 'visi_misi')->name('visi-misi');
    Route::get('profil/gambaran-umum', 'gambaran_umum')->name('gambaran-umum');
});