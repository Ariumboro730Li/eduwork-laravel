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

Route::resource('/home', App\Http\Controllers\HomeController::class);
Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);
Route::resource('/members', App\Http\Controllers\MemberController::class);
Route::resource('/publishers', App\Http\Controllers\PublisherController::class);
Route::resource('/transactions', App\Http\Controllers\TransactionController::class);
Route::resource('/transaction_details', App\Http\Controllers\TransactionDetailController::class);