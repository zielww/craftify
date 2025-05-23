<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('recommendation', 'recommendation');
Route::view('tutorial', 'tutorial');
