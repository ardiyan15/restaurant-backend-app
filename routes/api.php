<?php

use App\Http\Controllers\Api\RestaurantController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::middleware(['auth:sanctum'. CheckRole::class])->get('/restaurants', [RestaurantController::class, 'index']);
Route::middleware('auth:sanctum')->post('/restaurant', [RestaurantController::class, 'store']);
