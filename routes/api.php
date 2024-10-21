<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('kategoris', kategoriController::class);
Route::apiResource('bukus' , BukuController::class);
Route::post('/kategoris', [KategoriController::class, 'store']);
