<?php

use App\Http\Controllers\{MobilController, MerkController, TipeMobilController};
use Illuminate\Support\Facades\Route;

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

Route::get('/welcomes', function () {
    echo "Selamat datang di laravel";
});
Route::get('/greeting', function () {
    return view('greeting');
});
Route::get('/mobil', function () {
    return view('index');
});
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/create', [MobilController::class, 'create']);
Route::post('/mobil/simpan-data', [MobilController::class, 'store']);

Route::get('/merk', [MerkController::class, 'index']);
Route::get('/merk/create', [MerkController::class, 'create']);
Route::post('/merk/simpan-data', [MerkController::class, 'store']);

Route::get('/merk/edit/{id}', [MerkController::class, 'formEdit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::get('/merk/delete/{id}', [MerkController::class, 'delete']);

Route::get('/tipemobil', [TipeMobilController::class, 'index']);
Route::get('/tipemobil/create', [TipeMobilController::class, 'create']);
Route::post('/tipemobil/simpan-data', [TipeMobilController::class, 'store']);

Route::get('/tipemobil/edit/{id}', [TipeMobilController::class, 'formEdit']);
Route::post('/tipemobil/update/{id}', [TipeMobilController::class, 'update']);
Route::get('/tipemobil/delete/{id}', [TipeMobilController::class, 'delete']);