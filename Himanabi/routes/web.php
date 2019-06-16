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
//Routeは上からマッチングされるので順序に注意！！！！！

//ユーザー認証に関連しないもの（前置）
Route::get('/', 'HimanabiController@index')->name('himanabi.index'); //追加
Route::get('himanabi/index', 'HimanabiController@index')->name('himanabi.index');


//ユーザー認証に関連するもの
// Route::group(['middleware'=>'auth'],function(){ //ここは後日有効にします
		// Route::get('/{id}', 'HimanabiController@loginmach')->name('himanabi.index'); //認証済みトップ
		Route::get('createaccount', 'HimanabiController@createaccount')->name('himanabi.createaccount');//新規登録
		Route::post('createaccount', 'HimanabiController@store')->name('himanabi.createaccount');//新規保存画

		Route::get('himanabi/{id}/account/', 'HimanabiController@account')->name('himanabi.account');//ユーザー編集
		Route::get('himanabi/{id}/account/', 'HimanabiController@store')->name('himanabi.account');//ユーザー保存
		Route::get('himanabi/account', 'HimanabiController@account')->name('himanabi.account');//保留


		Route::get('himanabi/{id}/skill', 'HimanabiController@skill')->name('himanabi.skill');//スキル編集
		Route::get('himanabi/skillcheckfront','HimanabiController@skillcheckfront')->name('himanabi.skillcheckfront');
		//提供者のスキルカード確認
		Route::put('himanabi/{id}/skillupdate/', 'HimanabiController@skillupdate')->name('himanabi.skillupdate'); //スキル更新処理
		Route::get('himanabi/skill', 'HimanabiController@skill')->name('himanabi.skill');//保留

		Route::delete('himanabi/{id}/deleteaccount/', 'himanabiController@destory')->name('himanabi.destoryaccount'); //ユーザー削除処理


		Route::post('himanabi/{id}/like', 'HimanabiController@like')->name('himanabi.like');//いいね処理
    Route::post('himanabi/{id}/dislike', 'HimanabiController@dislike')->name('himanabi.dislike');//いいね解除


//Route::get('/about', 'HimanabiController@about')->name('himanabi.about');
//Route::get('/show', 'HimanabiController@show')->name('himanabi.show');
//Route::get('/like', 'HimanabiController@like')->name('himanabi.like');

// });//ここは後日有効にします


//ユーザー認証に関連しないもの（後置）
		Route::get('himanabi/about', 'HimanabiController@about')->name('himanabi.about');
		route::get('himanabi/description', 'HimanabiController@description')->name('himanabi.description');


Route::post('/', 'Auth\LoginController@index');


Auth::routes();





// Route::get('/home', 'HomeController@index')->name('home'); //Dean不要なので最終は削除
