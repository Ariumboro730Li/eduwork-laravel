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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->name('authors');
Route::get('/publishers', [App\Http\Controllers\PublisherController::class,'index'])->name('publishers');
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailController::class, 'index'])->name('transactiondetails');


Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create']);
Route::post('/members', [App\Http\Controllers\MemberController::class, 'store']);
Route::get('/members/{member}/edit', [App\Http\Controllers\MemberController::class, 'edit']);
Route::put('/members/{member}', [App\Http\Controllers\MemberController::class, 'update']);
Route::delete('/members/{member}', [App\Http\Controllers\MemberController::class, 'destroy']);

Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books');
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/books', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/books/{book}/edit', [App\Http\Controllers\BookController::class, 'edit']);
Route::put('/books/{book}', [App\Http\Controllers\BookController::class, 'update']);
Route::delete('/books/book', [App\Http\Controllers\BookController::class, 'destroy']);

Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalogs');
Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);
Route::get('/edit-catalog{id}', [App\Http\Controllers\CatalogController::class, 'edit']);
Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);

// Route::post("/logout",[LogoutController::class,"store"])->name("logout");