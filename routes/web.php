<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\Newsletter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


Route::get('/', [PostsController::class, 'index'])->name('home');

Route::post('newsletter', NewsletterController::class);

    Route::get('posts/{post:slug}', [PostsController::class, 'show']);
    Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

    Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
    Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


    Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
    Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

    Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Admin

Route::middleware('isAdmin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/posts', [AdminPostController::class, 'index']);
        Route::post('/posts', [AdminPostController::class, 'store']);
        Route::get('/posts/create', [AdminPostController::class, 'create']);
        Route::get('/posts/{post}/edit', [AdminPostController::class, 'edit']);
        Route::patch('/posts/{post}', [AdminPostController::class, 'update']);
        Route::delete('/posts/{post}', [AdminPostController::class, 'destroy']);
    });
});
