<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/recommendation', 'recommendation');
Route::view('/tutorial', 'tutorial');
Route::get('/project', function () {
    return 'project-details';
});


