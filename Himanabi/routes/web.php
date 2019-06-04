<?php

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


Route::get('/', 'HimanabiController@index')->name('himanabi.index'); //追加

Route::get('account', 'HimanabiController@index')->name('himanabi.account'); //検証用



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
