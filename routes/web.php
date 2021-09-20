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
    return view('layouts/user');
});
Auth::routes();
Route::post('/login','Auth\LoginController@loginBiasa');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('user', 'UserController@index')->name('user');
Route::get('/layouts/product', 'ProductController@index')->name('product');
Route::get('/layouts/order', 'OrderController@index')->name('order');
Route::get('/layouts/laporan', 'LaporanController@index')->name('laporan');
