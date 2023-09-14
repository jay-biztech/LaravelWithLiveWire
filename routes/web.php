<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Posts;
use App\Livewire\CreatePost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/posts', Posts::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/counter', Counter::class);

