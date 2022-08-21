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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);
Route::get('/members', [App\Http\Controllers\MemberController::class, 'index']);
Route::resource('/publishers', App\Http\Controllers\PublisherController::class);
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index']);
Route::get('/transaction_details', [App\Http\Controllers\TransactionDetailController::class, 'index']);