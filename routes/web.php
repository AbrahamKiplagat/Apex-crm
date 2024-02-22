<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ContactController;

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
Route::resource('task', TasksController::class);
Route::resource('contact', ContactController::class);
Route::get('contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');

use App\Http\Controllers\OrganizationController;

Route::resource('organizations', OrganizationController::class);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations');
use App\Http\Controllers\PostController;

// Index Page
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Create Post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Show Post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Edit Post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Delete Post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
