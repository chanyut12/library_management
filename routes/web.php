<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// ------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user-page', function () {
    return view('user-page');
})->middleware('auth','is_admin:user');

Route::get('/user-page', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('user-page');

// ------------------

Route::get('/test', function () {
    return view('test');
})->middleware('auth','is_admin:user');

Route::get('/admin-page', function () {
    return view('admin-page');
})->middleware('auth','is_admin:admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
