<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/login_in', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('login_in');
// Route::post('login', ['as' => 'login', 'uses' => 'Controllers/LoginController@authenticate']);
Route::post("login", [App\Http\Controllers\LoginController::class, 'postLogin'])->name('login');
Route::get("login_in", [App\Http\Controllers\LoginController::class, 'view'])->name('login_in');
Route::get("hello", [App\Http\Controllers\LoginController::class, 'hello_world']);
