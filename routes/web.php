<?php

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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::get('/borrows', [App\Http\Controllers\BorrowsController::class, 'index'])->name('borrows');
Route::get('/returns', [App\Http\Controllers\ReturnsController::class, 'index'])->name('returns');
