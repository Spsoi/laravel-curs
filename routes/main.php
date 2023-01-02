<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('register',  [RegisterController::class, 'index'])->name('register');
Route::post('register',  [RegisterController::class, 'store'])->name('register.store');

Route::get('login',  [LoginController::class, 'index'])->name('login');
Route::post('login',  [LoginController::class, 'store'])->name('login.store');


Route::get('blog',  [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}',  [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like',  [BlogController::class, 'like'])->name('blog.like');
