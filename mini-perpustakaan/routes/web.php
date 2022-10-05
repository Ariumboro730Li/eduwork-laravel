<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPeminjamanController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AuthorController;

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

Route::get('login','App\Http\Controllers\CustomAuthController@index');
Route::post('post-login','App\Http\Controllers\CustomAuthController@postLogin')->name('login.post');
Route::post('login', ['CustomAuthController@postLogin']);

Route::get('register','App\Http\Controllers\CustomAuthController@register');
Route::post('/post-register','App\Http\Controllers\CustomAuthController@postRegister')->name('post-register');

// Route::get('dashboard','App\Http\Controllers\CustomAuthController@dashboard');
Route::get('logout', 'App\Http\Controllers\CustomAuthController@logout');

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::resource('peminjaman', DashboardPeminjamanController::class);
Route::resource('books', BookController::class);
Route::resource('publisher', PublisherController::class);
Route::resource('author', AuthorController::class);

// Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('dashboarhome', 'App\Http\Controllers\HomeController@index');
Route::get('homerelasi', 'App\Http\Controllers\DashboardPeminjamanController@index');
Route::get('show','App\Http\Controllers\ShowController@show');


//API routes
Route::get('api/books', [BookController::class, 'api']);
Route::get('api/author',[AuthorController::class, 'api']);
Route::get('api/publisher',[PublisherController::class, 'api']);
