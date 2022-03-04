<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts',[PostController::class,'index']);
Route::get('/',[PostController::class,'index'])->name('posts');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('edit');
Route::post('/posts/{post}',[PostController::class,'update'])->name('update');
Route::post('/posts/',[PostController::class,'store'])->name('store');
Route::get('/posts/create',[PostController::class,'create'])->name('create');
