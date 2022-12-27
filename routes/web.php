<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

// Common Resource Routes:
// index - Show all post
// show - Show single post
// create - Show form to create new post
// store - Store new post
// edit - Show form to edit post
// update - Update post
// destroy - Delete post

// All posts
Route::get('/', [PostController::class, 'index']);

// Show form to create new post
Route::get('/posts/create', [PostController::class, 'create']);

// Store new post
Route::post('/posts', [PostController::class, 'store']);

// Show form to edit post
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// Update post
Route::put('/posts/{post}', [PostController::class, 'update']);

// Delete post
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);