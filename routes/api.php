<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Aut
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Public (tanpa autentikasi): Read All & Show
Route::apiResource('/books', BookController::class)->only(['index']);
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);

// Admin only: Create, Update, Destroy
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);
});