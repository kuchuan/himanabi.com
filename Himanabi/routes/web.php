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
// Route::get('/Top', function () {
//     return view('Top');
// });


// Route::get('himanabi/create', 'HimanabiController@create')->name('himanabi.create'); // ログイン処理
// Route::post('himanabi/create', 'HimanabiController@store')->name('himanabi.create'); // 保存処理




Route::get('/account', 'HimanabiController@account')->name('himanabi.account'); //検証用


Route::get('about', 'HimanabiController@about')->name('himanabi.about'); 

Route::post('/', 'Auth\LoginController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
