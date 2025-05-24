<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/recommendation', 'recommendation');
Route::view('/tutorial', 'tutorial');
Route::get('/project', function () {
    return view('project-details');
});

Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::view('/assessment', 'assessment');


