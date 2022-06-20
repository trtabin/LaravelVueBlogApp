<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blog/{id}', [HomeController::class, 'blog'])->name('blog');


Route::prefix('admin')->group(function () {
    
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::resource('post', PostController::class);
        Route::resource('category', CategoryController::class);
    });

    require __DIR__.'/auth.php';
});
