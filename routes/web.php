<?php
//library
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
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
//halaman pengunjung
// Client Start
Route::get('/', [PengunjungController::class, 'index'])->name('/');
//fungsi jalur
// Client End
// auth login start
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'index'])->name('/admin');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/pemesan', [PemesanController::class, 'index'])->name('/pemesan');
    Route::get('/client', [ClientController::class, 'index'])->name('/client');
    Route::get('/akun', [AkunController::class, 'index'])->name('/akun');

    // Siswa Set
    Route::get('/produk', [ProdukController::class, 'index'])->name('/produk');
    Route::get('/produk/{id}/lihat-produk', [produkController::class, 'lihatproduk'])->name('lihat-produk');
    Route::get('/produk-tambah', [produkController::class, 'tambahproduk'])->name('produk-tambah');
    Route::post('/produk-prosestambah', [produkController::class, 'addprosesproduk'])->name('produk-prosestambah');
    Route::get('/produk/{id}/edit-produk', [produkController::class, 'editproduk'])->name('edit-produk');
    Route::post('/produk/{id}/edit-produk-proses', [produkController::class, 'editprodukproses'])->name('edit-produk-proses');
    Route::get('/produk/{id}/hapus-produk', [produkController::class, 'hapusproduk'])->name('hapus-produk');
    //Siswa End

    Route::get('/logout', function (){
        \Auth::logout();
        return redirect('/');
    });

});
