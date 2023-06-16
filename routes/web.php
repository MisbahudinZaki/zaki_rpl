<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
Route::resource('mapel', MapelController::class);
Route::get('/home', [ContenController::class, 'index']);
Route::get('/contak', [ContenController::class, 'contak']);
Route::resource('jurusan', JurusanController::class);
Route::resource('buku',BukuController::class);
