<?php

use App\Models\Post;
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

// Route::view('/', 'welcome');

Route::get('/', function () {

    $announcements = Post::where('category', '=', 'announcement')->get();
    $informations = Post::where('category', '=', 'item')->get();


    return view('welcome', compact('announcements', 'informations'));
})->name('index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('post')
        ->controller(App\Http\Controllers\PostController::class)
        ->middleware(['auth'])
        ->group(function () {
            Route::get('/edit/{post_id}', 'editPost')->name('post.edit');
            Route::get('/create/{post_type}', function ($post_type) {

                return view('create-post', compact('post_type'));
            })->name('create.post');
        });

Route::prefix('information')
    ->controller(App\Http\Controllers\PostController::class)
    ->middleware(['auth'])
    ->group(function () {

        Route::get('/edit/{post_id}', function ($post_id) {

            return view('edit-item', compact('post_id'));
        })->name('information.edit');

    });
require __DIR__.'/auth.php';
