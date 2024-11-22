<?php
use App\Http\Controllers\ArticleController;

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::prefix('dashboard')->middleware('auth.middleware')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('articles', ArticleController::class);
});

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
