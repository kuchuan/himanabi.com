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

// Route::get('himanabi/create', 'HimanabiController@create')->name('himanabi.create'); // ログイン処理
// Route::post('himanabi/create', 'HimanabiController@store')->name('himanabi.create'); // 保存処理

// Route::group(['middleware'=>'auth'],function(){ //ここは後日有効にします
		Route::get('/account', 'HimanabiController@account')->name('himanabi.account');//投稿画面
		Route::post('diary/create', 'DiaryController@store')->name('diary.create');//保存画面

		Route::get('diary/{id}/edit', 'DiaryController@edit')->name('diary.edit'); // 編集画面
		Route::put('diary/{id}/update', 'DiaryController@update')->name('diary.update'); //更新処理

		Route::delete('diary/{id}/delete', 'DiaryController@destory')->name('diary.destory'); //削除処理
		//{}は対応するメソッドの引数になる
		route::get('/mypage', 'DiaryController@mypage')->name('diary.mypage');
		Route::post('diary/{id}/like', 'DiaryController@like')->name('diary.like');
    Route::post('diary/{id}/dislike', 'DiaryController@dislike')->name('diary.dislike');
// });//ここは後日有効にします

Route::get('/testlayout', 'HimanabiController@test')->name('himanabi.test');//Dean検証用
Route::get('/skills', 'HimanabiController@skill')->name('himanabi.skill');//Dean検証用


Route::get('/about', 'HimanabiController@about')->name('himanabi.about');


Route::post('/', 'Auth\LoginController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //Dean不要なので最終は削除
