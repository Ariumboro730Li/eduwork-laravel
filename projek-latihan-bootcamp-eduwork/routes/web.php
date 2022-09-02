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
Route::get('/home', 'App\Http\Controllers\DashboardController@index');
// Route::get('/catalogs_page', 'App\Http\Controllers\CatalogController@index');
Route::get('/publisher_page', 'App\Http\Controllers\PublisherController@index');
// Route::resource('/author', 'App\Http\Controllers\AuthorController');

Route::get('/writer', 'App\Http\Controllers\DashboardController@writer');
Route::get('/member', 'App\Http\Controllers\DashboardController@member');
Route::get('/memberall', 'App\Http\Controllers\ModelERDController@showAllMembers');
Route::get('/bookall', 'App\Http\Controllers\ModelERDController@showBooks');
Route::get('/publisher', 'App\Http\Controllers\ModelERDController@showPublishers');
// Route::get('/authorall', 'App\Http\Controllers\ModelERDController@author');
Route::get('/catalog', 'App\Http\Controllers\ModelERDController@catalogAll');
Route::get('/querybuilder', 'App\Http\Controllers\QueryBuilderController@index');


Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);
Route::resource('author/', App\Http\Controllers\AuthorController::class);
// Route::get('author/tes', 'App\Http\Controllers\AuthorController@tes');
Route::resource('/publisher', 'App\Http\Controllers\PublisherController');

Route::get('/api/author', [App\Http\Controllers\AuthorController::class, 'api']);
Route::get('/api/publisher', [App\Http\Controllers\PublisherController::class, 'api']);
Route::resource('/member', App\Http\Controllers\MemberController::class);
Route::get('/api/member', [App\Http\Controllers\MemberController::class, 'api']);

Route::resource('/books', App\Http\Controllers\BookController::class);
Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
Route::put('edit/{id}','ProductController@update')->name('product.update');
