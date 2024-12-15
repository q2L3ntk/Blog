<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/last-articles', [MainController::class, 'articles']);

Route::get('/archive', [MainController::class, 'archive']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);


