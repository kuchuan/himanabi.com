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
		Route::get('himanabi/{id}/accountcreate', 'HimanabiController@accountcreate')->name('himanabi.accountcreate');//新規登録
		Route::post('himanabi/{id}/accountcreate', 'HimanabiController@store')->name('himanabi.accountcreate');//新規保存
		Route::get('himanabi/{id}/accountedit', 'HimanabiController@accountedit')->name('himanabi.accountedit');//ユーザー編集
		Route::post('himanabi/{id}/accountedit/', 'HimanabiController@store')->name('himanabi.accountedit');//ユーザー保存


		Route::get('himanabi/{id}/skillcreate', 'HimanabiController@skillcreate')->name('himanabi.skillcreate');//スキル新規登録
		Route::get('himanabi/{id}/skilledit', 'HimanabiController@skilledit')->name('himanabi.skilledit');//スキル編集
		Route::get('himanabi/{id}/skillcheck','HimanabiController@skillcheck')->name('himanabi.skillcheck');//提供スキルカード確認
		Route::put('himanabi/{id}/skillupdate', 'HimanabiController@skillupdate')->name('himanabi.skillupdate'); //カードからスキル更新処理


		Route::get('himanabi/{id}/skilllist','HimanabiController@skilllist')->name('himanabi.skilllist');//スキルリスト


		route::get('himanabi/skilllist','HimanabiController@skilllist')->name('himanabi.skilllist');//いいねスキル

		Route::delete('himanabi/{id}/deleteaccount/', 'himanabiController@destory')->name('himanabi.destoryaccount'); //ユーザー削除処理


		Route::post('himanabi/like', 'HimanabiController@like')->name('himanabi.like');//いいね処理
    Route::post('himanabi/dislike', 'HimanabiController@dislike')->name('himanabi.dislike');//いいね解除

    // ログアウト
    // Route::get('/logout',['uses' => 'AuthLoginController@getLogout','as' => 'user.logout']);
    Route::get('logout','Auth\LoginController@logout')->name('logout');
//Route::get('/about', 'HimanabiController@about')->name('himanabi.about');
//Route::get('/show', 'HimanabiController@show')->name('himanabi.show');
//Route::get('/like', 'HimanabiController@like')->name('himanabi.like');

// });//ここは後日有効にします


//ユーザー認証に関連しないもの（後置）
		Route::get('himanabi/about', 'HimanabiController@about')->name('himanabi.about');
		route::get('himanabi/description', 'HimanabiController@description')->name('himanabi.description');
		Route::get('himanabi/message', 'HimanabiController@message')->name('himanabi.message');


Route::post('/', 'Auth\LoginController@index');


// Auth::routes();
Auth::routes(['verify' => true]); //Dean付け加え




// Route::get('/home', 'HomeController@index')->name('home'); //Dean不要なので最終は削除


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
