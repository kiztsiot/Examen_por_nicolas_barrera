<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\ProductoApiController;
use App\Http\Controllers\Api\UsuarioApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes - VentasFix
|--------------------------------------------------------------------------
|
| Autenticación por token (Sanctum). El login es público, todo lo demás
| requiere el header: Authorization: Bearer {token}
|
*/

Route::post('/login', [AuthApiController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout']);

    Route::apiResource('usuarios', UsuarioApiController::class);
    Route::apiResource('productos', ProductoApiController::class);
    Route::apiResource('clientes', ClienteApiController::class);
});
