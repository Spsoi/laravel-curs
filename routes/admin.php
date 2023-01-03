<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::prefix('admin')->middleware(['active', 'admin'])->group(function(){

    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('/test',  'App\Http\Controllers\TestController'::class)->name('admin.test');
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.create');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('adminposts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
    Route::post('posts/{post}/comment', [PostController::class, 'comment'])->name('admin.posts.comment');
    
    Route::resource('posts/{post}/comments', CommentController::class);
});
