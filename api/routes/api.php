<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\AuthController;

Route::apiResource('carros', CarroController::class);

Route::post('/upload', [CarroController::class, 'uploadImagem']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/cadastro', [AuthController::class, 'cadastro']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});