<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBantuanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminController;

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

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('beranda');
    Route::get('informasi', 'informasi')->name('informasi');
    Route::get('informasi/berita/{slug}', 'beritaBySlug');
    Route::post('cek-bantuan', 'cek_bantuan')->name('cek-bantuan');
    Route::get('layanan', 'layanan')->name('layanan');
    Route::get('profil', 'profil')->name('profil');
    Route::get('profil/gambaran-umum', 'gambaran_umum')->name('gambaran-umum');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('login', 'login')->name('login');
            Route::get('register', 'registration')->name('register');

            Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
            Route::post('validate_login', 'validate_login')->name('auth.validate_login');
        });
    });

    Route::middleware(['auth'])->group(function () {
        // Dashboard
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });

        // Data Bantuan
        Route::prefix('bantuan')->group(function () {
            Route::controller(DataBantuanController::class)->group(function () {
                Route::get('/', 'index')->name('data_bantuan');
                Route::post('import-data', 'import_excel')->name('import_data');
            });
        });

        // Berita
        Route::prefix('berita')->group(function () {
            Route::controller(BeritaController::class)->group(function () {
                Route::get('/', 'index')->name('berita');
                Route::get('post-berita', 'postView')->name('post_berita');
                Route::get('{slug}', 'showBySlug');
                Route::get('edit/{slug}', 'viewEditBerita');

                Route::post('edit/updating/{slug}', 'proses_editBerita')->name('update_berita');
                Route::post('hapus-berita', 'hapus_berita')->name('hapus_berita');
                Route::post('post-berita/post', 'posting')->name('posting_berita');
                Route::post('post-berita/ckeditor-upload', 'ckUpImg')->name('ckeditor.upload');
            });
        });

        // Akun Admin
        Route::prefix('akun')->group(function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('/', 'index')->name('akun_admin');
                Route::get('add-admin', 'add_admin')->name('tambah_admin');
                Route::get('edit/{id}', 'admin_by_id')->name('admin_by_id');
                Route::post('edit/update/{id}', 'update_admin');
                // Route::get('hapus-akun/{id}', 'hapus_akun')->name('hapus_akun');
                Route::post('hapus-akun', 'hapus_akun')->name('hapus_akun');

                Route::get('edit/password/{id}', 'password')->name('password');
                Route::post('edit/password/ubah/{id}', 'ubah_password');

                Route::controller(AuthController::class)->group(function () {
                    Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
                });
            });
        });

        Route::controller(AuthController::class)->group(function () {
            Route::get('logout', 'logout')->name('logout');
        });
    });
});
