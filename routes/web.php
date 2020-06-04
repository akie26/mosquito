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
    return view('home');
});

Auth::routes();
Route::get('/admin/privileges', 'HomeController@show')->name('ADMIN');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'CashierController@first');
Route::resource('products', 'ProductController');