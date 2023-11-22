<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/productos', [App\Http\Controllers\ProductoController::class, 'store']);
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/productos/{id}', [App\Http\Controllers\ProductoController::class, 'show']);
Route::patch('update/{id}', [App\Http\Controllers\ProductoController::class, 'update']);
Route::delete('/productos/{id}', [App\Http\Controllers\ProductoController::class, 'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
