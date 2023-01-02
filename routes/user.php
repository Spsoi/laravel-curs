<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PostController;

Route::prefix('user')->group(function(){
    Route::get('/test',  'App\Http\Controllers\TestController'::class)->name('user.test');
    Route::get('posts', [PostController::class, 'index'])->name('user.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{id}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('user.posts.create');
    Route::put('posts/{id}', [PostController::class, 'update'])->name('user.posts.update');
    Route::delete('posts/{id}', [PostController::class, 'delete'])->name('userposts.delete');
    Route::put('posts/{id}/like', [PostController::class, 'like'])->name('user.posts.like');
    Route::post('posts/{id}/comment', [PostController::class, 'comment'])->name('user.posts.comment');
    
    Route::resource('posts/{post}/comments', CommentController::class);
});