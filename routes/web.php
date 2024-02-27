<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

// All Book
Route::get('/', [BookController::class, 'index']);

// All Publisher
Route::get('/publisher', [PublisherController::class, 'index']);
//Contact
Route::get('/contact', [ContactController::class, 'index']);

// Single Book
Route::get('/{book:id}', [BookController::class, 'show']);
// Category
Route::get('/category/{category:id}', [CategoryController::class, 'index']);
// Single Publisher
Route::get('/publisher/{publisher:id}', [PublisherController::class, 'show']);
