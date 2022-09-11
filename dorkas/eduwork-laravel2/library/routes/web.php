<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\TransactionController;

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
Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalogs');
Route::get('/publishers', [App\Http\Controllers\PublisherController::class, 'index'])->name('publishers');
Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->name('authors');
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books');
Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailController::class, 'index'])->name('transactiondetails');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');


//Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index']);
//Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
//Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);
//Route::get('/catalogs/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
//Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
//Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);

Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);

//Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index']);
//Route::get('/authors/create', [App\Http\Controllers\AuthorController::class, 'create']);
//Route::post('/authors', [App\Http\Controllers\AuthorController::class, 'store']);
//Route::get('/authors/{author}/edit', [App\Http\Controllers\AuthorController::class, 'edit']);
//Route::put('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'update']);
//Route::delete('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'destroy']);

Route::resource('/authors', App\Http\Controllers\AuthorController::class);

//Route::get('/publishers', [App\Http\Controllers\PublisherController::class, 'index']);
//Route::get('/publishers/create', [App\Http\Controllers\PublisherController::class, 'create']);
//Route::post('/publishers', [App\Http\Controllers\PublisherController::class, 'store']);
//Route::get('/publishers/{publisher}/edit', [App\Http\Controllers\PublisherController::class, 'edit']);
//Route::put('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'update']);
//Route::delete('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'destroy']);

Route::resource('/publishers', App\Http\Controllers\PublisherController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::resource('/members', App\Http\Controllers\MemberController::class);

Route::get('/api/authors', [App\Http\Controllers\AuthorController::class, 'api']);
Route::get('/api/publishers', [App\Http\Controllers\PublisherController::class, 'api']);
Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
Route::get('/api/catalogs', [App\Http\Controllers\CatalogController::class, 'api']);
Route::get('/api/members', [App\Http\Controllers\MemberController::class, 'api']);

// Transaction
Route::resource('transactions', TransactionController::class);
Route::get('/api/transactions', [App\Http\Controllers\TransactionController::class, 'api']);

//spatie Transaction
Route::get('spaties', [TransactionController::class,'setRole']);
