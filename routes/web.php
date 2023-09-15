<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\PostDetail;
use App\Livewire\Posts;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', Posts::class);
Route::get('/posts/{id}', PostDetail::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/counter', Counter::class);

