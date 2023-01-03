<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\TestController;

Route::prefix('user')->middleware(['active'])->group(function(){
    Route::redirect('/', '/user/posts')->name('user');
    Route::get('/test',  TestController::class)->name('user.test');
    Route::get('posts', [PostController::class, 'index'])->name('user.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.create');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('userposts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');
    Route::post('posts/{post}/comment', [PostController::class, 'comment'])->name('user.posts.comment');
    
    Route::resource('posts/{post}/comments', CommentController::class);
});