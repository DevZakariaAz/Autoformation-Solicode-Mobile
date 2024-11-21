<?php
use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);
// Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
// Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
// Route::get('/articles/create/', [ArticleController::class, 'create'])->name('articles.create');