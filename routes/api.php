<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/sync-up/LTStock', [App\Http\Controllers\LtStockController::class, 'upload'])->name('sync-up-LTStock');
Route::post('/sync-up/DocType', [App\Http\Controllers\DocTypeController::class, 'upload'])->name('sync-up-DocType');

Route::post('/sync-up/Doc', [App\Http\Controllers\DocController::class, 'upload'])->name('sync-up-Doc');
