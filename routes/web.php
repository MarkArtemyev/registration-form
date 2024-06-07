<?php

use App\Http\Controllers\Auth\RegisterController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('admin/dashboard', function () {
    return 'Welcome to admin dashboard';
})->name('admin.dashboard');
