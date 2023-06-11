<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroler;
use App\Http\Controllers\FormskillController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\produksController;
use App\Http\Controllers\formTugas1Controller;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/salam', function(){
    return'assalamulaikum';
});

route::get('/hallo', function(){
    return view ('hallo');
});

route::get('/hallo2', function(){
    return view ('hallo.halloworld');  
});
route::get('/form',[formcontroler::class, 'index']);
route::post('/hasil',[formcontroler::class, 'store']);
route::get('/dashboard',[DashboardController::class, 'index']);
route::get('/formTugas1',[FormTugas1Controller::class, 'index']);
route::get('/formskill',[FormskillController::class, 'index']);
route::post('/formskill',[FormskillController::class, 'store']);



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Buat route untuk produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    route::get('/produk',[produksController::class, 'index']);
    
});



Route::prefix('frontend')->group(function () {
    Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend');

});

Route::prefix('admin')->group(function () {
    
    route::get('/produk',[produksController::class, 'index']);
    route::get('/produk/create',[produksController::class, 'create']);
    Route::get('/produk/create', [ProduksController::class, 'create']);
    Route::post('/produk/store', [ProduksController::class, 'store']);
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategoriProduk');
});
    


