<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountController;
use App\Http\Controllers\AdvancedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/count/{operator}/{a}/{b}', [CountController::class, 'hasil']);
Route::get('/advanced/{operator}/{a}/{b?}', [AdvancedController::class, 'hasil']);
