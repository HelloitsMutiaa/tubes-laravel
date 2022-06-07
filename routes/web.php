<?php

use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\Create;
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

Route::get('/index', function(){
    return view('index');
});

Route::get('/', function () {
    return view('index');
})->name('home');

//Login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware('auth');

//Register
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');

//ADMIN & SISWA
Route::group(['middleware' => 'auth'], function(){
//Dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Books
Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
Route::get('/books/add', [App\Http\Controllers\BooksController::class, 'create'])->name('addbook');
Route::post('/books/add', [App\Http\Controllers\BooksController::class, 'store'])->name('addbook');
Route::delete('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'destroy'])->name('deletebook');
Route::get('/books/edit/{id}', [App\Http\Controllers\BooksController::class, 'edit'])->name('editbook');
Route::post('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update'])->name('updatebook');
Route::get('/books/print', [App\Http\Controllers\BooksController::class, 'printbuku'])->name('cetak-buku');
});

//ADMIN
Route::group(['middleware'=> ['auth', 'ceklevel:admin']], function(){

//Users
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::get('/user/add', [App\Http\Controllers\UsersController::class, 'create'])->name('adduser');
Route::post('/user/add', [App\Http\Controllers\UsersController::class, 'store'])->name('adduser');
Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('edituser');
Route::post('/user/update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('updateuser');
Route::delete('/user/delete{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('deleteuser');
Route::get('/users/print', [App\Http\Controllers\UsersController::class, 'print'])->name('cetak-siswa');

//Borrows
Route::get('/borrows', [App\Http\Controllers\BorrowsController::class, 'index'])->name('borrows');
Route::get('/borrows/add', [App\Http\Controllers\BorrowsController::class, 'create'])->name('addborrow');
Route::post('/borrows/add', [App\Http\Controllers\BorrowsController::class, 'store'])->name('addborrow');
Route::post('/borrows/update/{id}', [App\Http\Controllers\BorrowsController::class, 'update'])->name('updateborrow');
Route::post('/borrows/reject/{id}', [App\Http\Controllers\BorrowsController::class, 'reject'])->name('rejectborrow');
Route::delete('/borrows/delete{id}', [App\Http\Controllers\BorrowsController::class, 'destroy'])->name('deleteborrow');
Route::get('/borrows/print', [App\Http\Controllers\BorrowsController::class, 'printpinjam'])->name('cetak-pinjam');

//Returns
Route::get('/returns', [App\Http\Controllers\ReturnsController::class, 'index'])->name('returns');
Route::get('/returns/add/{id}', [App\Http\Controllers\ReturnsController::class, 'create'])->name('addreturn');
Route::post('/returns/add/{id}', [App\Http\Controllers\ReturnsController::class, 'store'])->name('addreturn');
Route::post('/returns/update/{id}', [App\Http\Controllers\ReturnsController::class, 'update'])->name('updatereturn');
Route::delete('/returns/delete{id}', [App\Http\Controllers\ReturnsController::class, 'destroy'])->name('deletereturn');

});

//SISWA
Route::group(['middleware'=> ['auth', 'ceklevel:siswa']], function(){

//user
Route::get('/siswa', [App\Http\Controllers\User\UserController::class, 'index'])->name('siswa');
Route::get('/siswa/edit/{id}', [App\Http\Controllers\User\UserController::class, 'edit'])->name('editsiswa');
Route::post('/siswa/update/{id}', [App\Http\Controllers\User\UserController::class, 'update'])->name('updatesiswa');

//pinjam
Route::get('/pinjam', [App\Http\Controllers\User\PinjamController::class, 'index'])->name('pinjam');
Route::get('/pinjam/add/{id}', [App\Http\Controllers\User\PinjamController::class, 'create'])->name('addpinjam');
Route::post('/pinjam/add/{id}', [App\Http\Controllers\User\PinjamController::class, 'store'])->name('addpinjam');
Route::delete('/pinjam/delete/{id}', [App\Http\Controllers\User\PinjamController::class, 'destroy'])->name('deletepinjam');

//kembali
Route::get('/kembali', [App\Http\Controllers\User\KembaliController::class, 'index'])->name('kembali');
Route::get('/kembali/add/{id}', [App\Http\Controllers\User\KembaliController::class, 'create'])->name('addkembali');
Route::post('/kembali/add/{id}', [App\Http\Controllers\User\KembaliController::class, 'store'])->name('addkembali');

});

