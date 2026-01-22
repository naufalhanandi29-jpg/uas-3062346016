<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create']);
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
Route::get('/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit']);
Route::put('/pendaftaran/{id}', [PendaftaranController::class, 'update']);
Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy']);
