<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
