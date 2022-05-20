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

//Login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

//Register
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register');

//Dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Books
Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
Route::get('/books/add', [App\Http\Controllers\BooksController::class, 'create'])->name('addbook');
Route::post('/books/add', [App\Http\Controllers\BooksController::class, 'store'])->name('addbook');
Route::delete('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'destroy'])->name('deletebook');
Route::get('/books/edit/{id}', [App\Http\Controllers\BooksController::class, 'edit'])->name('editbook');
Route::post('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update'])->name('updatebook');


//Users
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index'])->name('user');


//Borrows
Route::get('/borrows', [App\Http\Controllers\BorrowsController::class, 'index'])->name('borrows');

//Returns
Route::get('/returns', [App\Http\Controllers\ReturnsController::class, 'index'])->name('returns');
