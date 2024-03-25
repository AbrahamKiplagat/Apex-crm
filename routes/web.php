<?php

use App\Http\Controllers\DealController;
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

Route::resource('deals', DealController::class);

use App\Http\Controllers\InvoiceController;

Route::resource('invoices', InvoiceController::class);

Route::get('/', function () {
             return view('welcome');})
                    ->middleware(['auth', 'verified']);

Route::resource('task', TasksController::class);
Route::resource('contact', ContactController::class);
Route::get('contact/{contact}/edit',
            [ContactController::class, 'edit'])
                                ->name('contact.edit');

use App\Http\Controllers\OrganizationController;

Route::resource('organizations', OrganizationController::class);
Route::get('/contact',
            [ContactController::class, 'index'])
                            ->middleware(['auth', 'verified'])
                                            ->name('contact');

Route::get('/organizations',
            [OrganizationController::class, 'index'])
                                    ->middleware(['auth', 'verified'])
                                     ->name('organizations');

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

// Index Page
Route::get('/posts', [PostController::class, 'index'])
            ->middleware(['auth', 'verified'])->name('posts.index');

// Create Post
Route::get('/posts/create',
            [PostController::class, 'create'])
                            ->name('posts.create');
Route::post('/posts',
            [PostController::class, 'store'])
                            ->name('posts.store');

// Show Post
Route::get('/posts/{post}',
             [PostController::class, 'show'])
                            ->name('posts.show');

// Edit Post
Route::get('/posts/{post}/edit',
             [PostController::class, 'edit'])
                            ->name('posts.edit');

Route::put('/posts/{post}',
                    [PostController::class, 'update'])
                                ->name('posts.update');

// Delete Post
Route::delete('/posts/{post}',
                [PostController::class, 'destroy'])
                        ->name('posts.destroy');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',
            [ProfileController::class, 'edit'])
                            ->name('profile.edit');

    Route::patch('/profile',
                [ProfileController::class, 'update'])
                                    ->name('profile.update');

    Route::delete('/profile',
                    [ProfileController::class, 'destroy'])
                                    ->name('profile.destroy');
});

require __DIR__ . '/auth.php';
