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

Route::resource('/books',App\Http\Controllers\BookController::class);
Route::resource('/authors',App\Http\Controllers\AuthorController::class);
Route::resource('/publishers',App\Http\Controllers\PublisherController::class);
Route::resource('/catalogs',App\Http\Controllers\CatalogController::class);
Route::resource('/taransactions',App\Http\Controllers\TransactionController::class);
Route::resource('/transactiondetails',App\Http\Controllers\TransactionDetailController::class);
Route::resource('/members',App\Http\Controllers\MemberController::class);


// Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->name('authors');
// Route::get('/authors/create', [App\Http\Controllers\AuthorController::class, 'create']);
// Route::post('/authors', [App\Http\Controllers\AuthorController::class, 'store']);
// Route::get('/authors/{author}/edit', [App\Http\Controllers\AuthorController::class,'edit']);
// Route::put('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'update']);
// Route::delete('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'destroy']);

// Route::get('/publishers', [App\Http\Controllers\PublisherController::class,'index'])->name('publishers');
// Route::get('/publishers/create', [App\Http\Controllers\PublisherController::class, 'create']);
// Route::post('/publishers', [App\Http\Controllers\PublisherController::class, 'store']);
// Route::get('/publishers/{publisher}/edit', [App\Http\Controllers\PublisherController::class,'edit']);
// Route::put('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'update']);
// Route::delete('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'destroy']);

// Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
// Route::get('/transactions/create', [App\Http\Controllers\TransactionController::class, 'create']);
// Route::post('/transactions', [App\Http\Controllers\TransactionController::class, 'store']);
// Route::get('/transactions/{transaction}/edit', [App\Http\Controllers\TransactionController::class,'edit']);
// Route::put('/transactions/{transaction}', [App\Http\Controllers\TransactionController::class, 'update']);
// Route::delete('/transactions/{transaction}', [App\Http\Controllers\TransactionController::class, 'destroy']);

// Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailController::class, 'index'])->name('transactiondetails');
// Route::get('/transactiondetails/create', [App\Http\Controllers\TransactionDetailController::class, 'create']);
// Route::post('/transactiondetails', [App\Http\Controllers\TransactionDetailController::class, 'store']);
// Route::get('/transactiondetails/{transactiondetail}/edit', [App\Http\Controllers\TransactionDetailController::class,'edit']);
// Route::put('/transactiondetails/{transactiondetail}', [App\Http\Controllers\TransactionDetailController::class, 'update']);
// Route::delete('/transactiondetails/{transactiondetail}', [App\Http\Controllers\TransactionDetailController::class, 'destroy']);

// Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
// Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create']);
// Route::post('/members', [App\Http\Controllers\MemberController::class, 'store']);
// Route::get('/members/{member}/edit', [App\Http\Controllers\MemberController::class,'edit']);
// Route::put('/members/{member}', [App\Http\Controllers\MemberController::class, 'update']);
// Route::delete('/members/{member}', [App\Http\Controllers\MemberController::class, 'destroy']);

// Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books');
// Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create']);
// Route::post('/books', [App\Http\Controllers\BookController::class, 'store']);
// Route::get('/books/{book}/edit', [App\Http\Controllers\BookController::class, 'edit']);
// Route::put('/books/{book}', [App\Http\Controllers\BookController::class, 'update']);
// Route::delete('/books/{book}', [App\Http\Controllers\BookController::class, 'destroy']);

// Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalogs');
// Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
// Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);
// Route::get('/catalogs/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
// Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
// Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);

// Route::post("/logout",[LogoutController::class,"store"])->name("logout");