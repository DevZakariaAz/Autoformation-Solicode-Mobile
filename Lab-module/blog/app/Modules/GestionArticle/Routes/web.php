<?php
// app/Modules/GestionArticle/Routes/web.php
use Illuminate\Support\Facades\Route;
use App\Modules\GestionArticle\Controllers\ArticleController;

Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('{id}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});



?>