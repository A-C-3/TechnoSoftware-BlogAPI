<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    // Posts
    Route::get('/posts',       [PostController::class, 'index']);
    Route::get('/posts/{id}',  [PostController::class, 'show']);
    Route::post('/posts',         [PostController::class, 'store']);
    Route::put('/posts/{id}',     [PostController::class, 'update']);
    Route::delete('/posts/{id}',  [PostController::class, 'destroy']);

    // Comments
    Route::post('/posts/{id}/comments', [CommentController::class, 'store']);
});