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

Route::get('/', function () {
    return view('layouts.begin');
});




Route::get('/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/create',[PostController::class, 'store'])->name('posts.store');

//Route::get('/create',[PostController::class, 'store'])->name('save.post');

//Route::resource('posts','App\Http\Controllers\PostController', ['except' => ['update','delete']] );