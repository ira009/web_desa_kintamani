<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas');
Route::get('/petugas/detail/{id_petugas}', [PetugasController::class, 'detail']);
Route::get('/petugas/add', [PetugasController::class, 'add']);
Route::post('/petugas/insert', [PetugasController::class, 'insert']);
Route::get('/petugas/edit/{id_petugas}', [PetugasController::class, 'edit']);
Route::post('/petugas/update/{id_petugas}', [PetugasController::class, 'update']);
Route::get('/petugas/delete/{id_petugas}', [PetugasController::class, 'delete']);
