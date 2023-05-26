<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormskillController;

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
route::get('/formskill',[FormskillController::class, 'index']);



