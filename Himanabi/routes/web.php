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
Route::get('himanabi/index', 'HimanabiController@index')->name('himanabi.index'); //追加
Route::get('himanabi/{id}/mypage', 'HimanabiController@mypage')->name('himanabi.mypage');


//ユーザー認証に関連するもの
// Route::group(['middleware'=>'auth'],function(){ //ここは後日有効にします
		// Route::get('/{id}', 'HimanabiController@loginmach')->name('himanabi.index'); //認証済みトップ
		Route::get('himanabi/{id}/createaccount', 'HimanabiController@createaccount')->name('himanabi.createaccount');//新規登録
		Route::post('createaccount', 'HimanabiController@store')->name('himanabi.createaccount');//新規保存画

		Route::get('himanabi/{id}/account', 'HimanabiController@accountedit')->name('himanabi.account');//ユーザー編集
		Route::post('himanabi/{id}/account/', 'HimanabiController@store')->name('himanabi.account');//ユーザー保存


		Route::get('himanabi/{id}/skillcreate', 'HimanabiController@skillcreate')->name('himanabi.skillcreate');//スキル新規登録
		Route::get('himanabi/{id}/skill', 'HimanabiController@skilledit')->name('himanabi.skill');//スキル編集
		Route::get('himanabi/{id}skillcheck','HimanabiController@skillcheck')->name('himanabi.skillcheck');//提供スキルカード確認
		Route::put('himanabi/{id}/skillupdate', 'HimanabiController@skillupdate')->name('himanabi.skillupdate'); //カードからスキル更新処理


		Route::get('himanabi/{id}/skilllist','HimanabiController@skilllist')->name('himanabi.skilllist');//スキルリスト


		route::get('himanabi/skilllist','HimanabiController@skilllist')->name('himanabi.skilllist');//いいねスキル

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
