<?php

use App\Http\Controllers\CTMonHocController;
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

Route::get('/home',[CTMonHocController::class,'ctGetData'])->name('congtung.monhoc');
route::get('/detail/{mamh}',[CTMonHocController::class,'ctGetDetail'])->name('congtung.detail');
Route::get('/edit/{mamh}', [CTMonHocController::class, 'ctEdit'])->name('congtung.edit');
Route::post('/edit/{mamh}', [CTMonHocController::class, 'ctEditSubmit'])->name('congtung.edit.submit');
Route::get('/del/{mamh}',[CTMonHocController::class,'ctDeleteSubmit'])->name('congtung.delete');
Route::get('/create', [CTMonHocController::class, 'ctCreate'])->name('congtung.create');
Route::post('/store', [CTMonHocController::class, 'ctStore'])->name('congtung.store');