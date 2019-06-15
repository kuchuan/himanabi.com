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


//Routeは上からマッチングされるので順序に注意！！！！！


//ユーザー認証に関連しないもの（前置）
		Route::get('createaccount', 'HimanabiController@createaccount')->name('himanabi.createaccount');//新規登録
		Route::post('createaccount', 'HimanabiController@store')->name('himanabi.createaccount');//保存画面
		Route::get('himanabi/account/{id}', 'HimanabiController@account')->name('himanabi.account');//ユーザー編集画面
		Route::get('account', 'HimanabiController@account')->name('himanabi.account');//

//ユーザー認証に関連するもの
// Route::group(['middleware'=>'auth'],function(){ //ここは後日有効にします
    //{}は対応するメソッドの引数になる
    // Route::post('account');
		// Route::get('himanabi/account/{id}', 'HimanabiController@account')->name('himanabi.account');//ユーザー編集画面
		Route::get('/{id}', 'HimanabiController@loginmach')->name('himanabi.index'); //ユーザー認証済み画面
		Route::put('himanabi/update/{id}', 'HimanabiController@update')->name('himanabi.updateaccount'); //ユーザー更新処理

		Route::delete('himanabi/deleteaccount/{id}', 'himanabiController@destory')->name('himanabi.destoryaccount'); //ユーザー削除処理

		Route::post('himanabi/{id}/like', 'HimanabiController@like')->name('himanabi.like');
    Route::post('himanabi/{id}/dislike', 'HimanabiController@dislike')->name('himanabidiary.dislike');


		Route::get('/skills', 'HimanabiController@skill')->name('himanabi.skill');//Dean検証用

// });//ここは後日有効にします


//ユーザー認証に関連しないもの（後置）
		Route::get('himanabi/about', 'HimanabiController@about')->name('himanabi.about');
		Route::get('himanabi.index', 'HimanabiController@index')->name('himanabi.index'); 


		Route::post('/', 'Auth\LoginController@index');



Auth::routes();





// Route::get('/home', 'HomeController@index')->name('home'); //Dean不要なので最終は削除
