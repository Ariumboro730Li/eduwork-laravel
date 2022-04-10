<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('login/dashboard', function () {
//     echo 'Hello World';
// });
// Route::get('login', 'LoginController@view')->name('login');
// Route::post('login', 'LoginController@authenticate')->name('login.auth');
Route::post('login', [App\Http\Controllers\LoginController::class, 'postLogin'])->name("login")->middleware('auth');
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('pagehalaman', 'HomeController@view_page');
Route::get('catalog', 'CatalogController@index');
Route::get('tespage', function () {
    return view('home');
});
Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
