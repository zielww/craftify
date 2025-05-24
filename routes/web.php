<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'featured']);

Route::view('/assessment', 'assessment');

Route::middleware('guest')->group(function () {
    // Authentication stuff
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);

    // Main pages
    Route::get('tutorial', [ProjectController::class, 'tutorial']);
    Route::get('recommendation', [ProjectController::class, 'recommendation']);
    Route::get('/project/{id}', [ProjectController::class, 'project_details']);
    Route::post('/search', SearchController::class);
});



