<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverageTradingController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LeverageTradingController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    // Route::get('/forgot-password', 'forgotPassword')->name('password.request');
    // Route::get('/forgot-password-verification-code', 'verificationCode');
    // Route::get('/new-password', 'newPassword');
});