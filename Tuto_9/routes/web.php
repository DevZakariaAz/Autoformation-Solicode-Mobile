<?php
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\CheckRole;

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware([CheckRole::class]);

// Route::get('/home', function (){
//     return "Home page";
// })->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/login', function (){
    return "login page";
})->name('login');