<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/{user}', [UserController::class, 'show']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::post('/users', [UserController::class, 'store']);
// Route::delete('/users{user}', [UserController::class, 'destroy']);
// Route::get('/users{user}/edit', [UserController::class, 'edit']);
// Route::put('/users', [UserController::class, 'update']);

Route::redirect('/', '/users');
Route::resource('/users', UserController::class);