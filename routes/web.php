<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/comments',[CommentsController::class,'store'])->name('comments.store')->middleware('auth');

Route::get('/categories',[CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show')->middleware('auth');
Route::get('/posts/{post}',[PostController::class,'show'])->name('post.show')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
