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
Route::get('/user/add', [App\Http\Controllers\UsersController::class, 'create'])->name('adduser');
Route::post('/user/add', [App\Http\Controllers\UsersController::class, 'store'])->name('adduser');
Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('edituser');
Route::post('/user/update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('updateuser');
Route::delete('/user/delete{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('deleteuser');


//Borrows
Route::get('/borrows', [App\Http\Controllers\BorrowsController::class, 'index'])->name('borrows');
Route::get('/borrows/add', [App\Http\Controllers\BorrowsController::class, 'create'])->name('addborrow');
Route::post('/borrows/add', [App\Http\Controllers\BorrowsController::class, 'store'])->name('addborrow');
Route::post('/borrows/update/{id}', [App\Http\Controllers\BorrowsController::class, 'update'])->name('updateborrow');

//Returns
Route::get('/returns', [App\Http\Controllers\ReturnsController::class, 'index'])->name('returns');
