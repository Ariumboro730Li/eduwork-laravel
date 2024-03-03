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


Route::group(['prefix' => 'dashboards', 'middleware' => ['auth']], function(){
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
// Route::resource('/dashboards', App\Http\Controllers\DashboardController::class);
});

// Route::get('/members', [App\Http\Controllers\MemberController::class, 'index']);

Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index']);
Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailController::class, 'index']);

// menu catalog

// Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index']);
// Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
// Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);

// Route::get('/catalogs/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
// Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
// Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);

Route::resource('/catalogs',App\Http\Controllers\CatalogController::class);
// --akhir menu catalog

// menu publisher
// Route::get('/publishers', [App\Http\Controllers\PublisherController::class, 'index']);
// Route::get('/publishers/create', [App\Http\Controllers\PublisherController::class, 'create']);
// Route::post('/publishers', [App\Http\Controllers\PublisherController::class, 'store']);
// Route::get('/publishers/{publisher}/edit', [App\Http\Controllers\PublisherController::class, 'edit']);
// Route::put('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'update']);
// Route::delete('/publishers/{publisher}', [App\Http\Controllers\PublisherController::class, 'destroy']);
Route::resource('/publishers',App\Http\Controllers\PublisherController::class);
Route::get('/api/publishers', [App\Http\Controllers\PublisherController::class, 'api']);

// akhir menu publisher

//menu author
// Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index']);
// Route::get('/authors/create', [App\Http\Controllers\AuthorController::class, 'create']);

Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::get('/api/authors', [App\Http\Controllers\AuthorController::class, 'api']);

//akhir menu author

// menu member
Route::resource('/members', App\Http\Controllers\MemberController::class);
Route::get('/api/members', [App\Http\Controllers\MemberController::class, 'api']);
// akhir menu member


// menu book
// Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
// akhir menu book

// menu dashboard

//akhri menu dashboard

//menggunakan laravel spatie
Route::get('test_spatie', [App\Http\Controllers\AdminController::class, 'test_spatie']);
Route::get('/catalogs', [App\Http\Controllers\AdminController::class, 'katalog']);
// Route::get('test_spatie', 'AdminController@test_spatie');
//akhir menggunakan laravel spatie