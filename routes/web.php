<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = Post::latest()->paginate(10);
    // $data = Post::where('isPublished', 1)->latest()->paginate(7);
    return Inertia::render('Welcome',[
        'data' => $data
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/blog/{id}', function ($id) {
    $post = Post::with('categories')->where('id', $id)->first();
    return Inertia::render('Blog',[
        'data' => compact('post'),
    ]);
})->name('blog');

Route::prefix('admin')->group(function () {
    
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::resource('post', PostController::class);
        Route::resource('category', CategoryController::class);
    });

    require __DIR__.'/auth.php';
});
