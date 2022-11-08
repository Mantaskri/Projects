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

Route::view( uri: '/', view:'index')->name( name:'home');
Route::view( uri: '/about', view:'about')->name( name:'about');
Route::view( uri: '/contact', view:'contact')->name( name:'contact');

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'homelist'])->name('home');
//Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');