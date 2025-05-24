<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'featured']);
Route::get('tutorial', [ProjectController::class, 'tutorial']);
Route::get('recommendation', [ProjectController::class, 'recommendation']);
Route::get('/project/{id}', [ProjectController::class, 'project_details']);

Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::view('/assessment', 'assessment');


