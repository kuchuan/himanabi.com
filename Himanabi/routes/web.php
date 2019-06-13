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

Route::get('/', 'HimanabiController@index')->name('himanabi.index'); 




//追加
// Route::get('/Top', function () {
//     return view('Top');
// });
Route::get('/login','Himanabi@login')->name('login');

Auth::routes();

Route::group(["middleware" => "auth"], function(){


Route::get('/', 'HimanabiController@index')->name('himanabi.index'); //追加
//Routeは上からマッチングされるので順序に注意！！！！！


// Route::group(['middleware'=>'auth'],function(){ //ここは後日有効にします
		Route::get('createaccount', 'HimanabiController@createaccount')->name('himanabi.createaccount');//新規登録
		Route::post('createaccount', 'HimanabiController@store')->name('Himanabi.createaccount');//保存画面

    //{}は対応するメソッドの引数になる
    // Route::post('account');
		Route::get('account/{id}', 'HimanabiController@account')->name('himanabi.account');//ユーザー編集画面
		Route::put('himanabi/update/{id}', 'HimanabiController@update')->name('himanabi.updateaccount'); //ユーザー更新処理

		Route::delete('himanabi/deleteaccount/{id}', 'himanabiController@destory')->name('himanabi.destoryaccount'); //ユーザー削除処理

		Route::post('himanabi/{id}/like', 'HimanabiController@like')->name('himanabi.like');
    Route::post('himanabi/{id}/dislike', 'HimanabiController@dislike')->name('himanabidiary.dislike');
// });//ここは後日有効にします


Route::get('/delete','HimanabiController@delete')->name('himanabi.delete');

Route::get('/skills', 'HimanabiController@skill')->name('himanabi.skill');//Dean検証用


Route::get('/about', 'HimanabiController@about')->name('himanabi.about');

Route::get('/message','HimanabiController@message')->name('himanabi.message');

Route::get('/delete','HimanabiController@delete')->name('himanabi.delete');




Route::post('/', 'HimanabiController@index');


});

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home'); //Dean不要なので最終は削除
