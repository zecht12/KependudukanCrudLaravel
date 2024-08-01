<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KependudukanController;

Route::get('/', function () {
return view('welcome');
});

Route::get('/kependudukan', [KependudukanController::class, 'index']);
Route::get('/kependudukan/create', [KependudukanController::class, 'create']);
Route::post('/kependudukan/store', [KependudukanController::class, 'store']);
Route::get('/kependudukan/{nik}/edit', [KependudukanController::class, 'edit']);
Route::post('/kependudukan/{nik}/update', [KependudukanController::class, 'update']);
Route::get('/kependudukan/{nik}/delete', [KependudukanController::class, 'delete']);