<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PengaduanController;
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
    return view('layout');
});

Route::get('/jurusan',[JurusanController::class, 'index'])->name('Jurusan.index');
Route::get('/jurusan/create',[JurusanController::class, 'create'])->name('Jurusan.create');
Route::post('/jurusan',[JurusanController::class, 'store'])->name('Jurusan.store');
Route::get('/jurusan/{id}/edit',[JurusanController::class, 'edit'])->name('Jurusan.edit');
Route::put('/jurusan/{id}',[JurusanController::class, 'update'])->name('Jurusan.update');
Route::delete('/jurusan/{id}',[JurusanController::class, 'destroy'])->name('Jurusan.destroy');

Route::get('/struktur',[StrukturController::class, 'index'])->name('Struktur.index');
Route::get('/struktur/create',[StrukturController::class, 'create'])->name('Struktur.create');
Route::post('/struktur',[StrukturController::class, 'store'])->name('Struktur.store');
Route::get('/struktur/{id}/edit',[StrukturController::class, 'edit'])->name('Struktur.edit');
Route::put('/struktur/{id}',[StrukturController::class, 'update'])->name('Struktur.update');
Route::delete('/struktur/{id}',[StrukturController::class, 'destroy'])->name('Struktur.destroy');

Route::get('/pengaduan',[PengaduanController::class, 'index'])->name('Pengaduan.index');
Route::get('/pengaduan/create',[PengaduanController::class, 'create'])->name('Pengaduan.create');
Route::post('/pengaduan',[PengaduanController::class, 'store'])->name('Pengaduan.store');
Route::get('/pengaduan/{id}/edit',[PengaduanController::class, 'edit'])->name('Pengaduan.edit');
Route::put('/pengaduan/{id}',[PengaduanController::class, 'update'])->name('Pengaduan.update');
Route::delete('/pengaduan/{id}',[PengaduanController::class, 'destroy'])->name('Pengaduan.destroy');
