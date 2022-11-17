<?php

use App\Http\Controllers\SoalController;
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

Route::get('/', function () {
    return view('home',);
});

Route::get('/about', function () {
    return view('About',);
});


Route::get('/soal', [SoalController::class,'index']);

Route::get('/tambah-soal', [SoalController::class,'create']);
Route::post('/simpan-soal', [SoalController::class,'store']);





