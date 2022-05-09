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
Route::get('/catalogs_page', 'App\Http\Controllers\DashboardController@catalog');
Route::get('/writer', 'App\Http\Controllers\DashboardController@writer');
Route::get('/member', 'App\Http\Controllers\DashboardController@member');
Route::get('/memberall', 'App\Http\Controllers\ModelERDController@showAllMembers');
Route::get('/bookall', 'App\Http\Controllers\ModelERDController@showBooks');
Route::get('/publisher', 'App\Http\Controllers\ModelERDController@showPublishers');
Route::get('/authorall', 'App\Http\Controllers\ModelERDController@author');
Route::get('/catalog', 'App\Http\Controllers\ModelERDController@catalogAll');
Route::get('/querybuilder', 'App\Http\Controllers\QueryBuilderController@index');
