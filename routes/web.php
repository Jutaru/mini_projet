<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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



//Route::resource('posts','PostController', ['except' => ['update','delete']] );

//Route::resource('/posts', PostController::class);
Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/create',[PostController::class, 'create'])->name('posts.create');
Route::get('/show/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/edit/{post}', [PostController::class, 'update']);
Route::post('/create',[PostController::class, 'store']);

Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('posts.destroy');