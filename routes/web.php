<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'details']);
Route::get('/categories/{id}', [BookController::class, 'filterByCategory']);
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
