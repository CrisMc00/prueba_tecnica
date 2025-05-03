<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/v1/register', [AuthController::class, 'register']);
Route::post('/v1/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/v1/usuarios', [UsuarioController::class, 'index']);
    Route::get('/v1/usuarios/{id}', [UsuarioController::class, 'show']);
    Route::post('/v1/usuarios', [UsuarioController::class, 'store']);
    Route::put('/v1/usuarios/{id}', [UsuarioController::class, 'update']);
    Route::delete('/v1/usuarios/{id}', [UsuarioController::class, 'destroy']);
});

