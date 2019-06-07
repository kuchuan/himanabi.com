<?php

namespace App\Http\Controllers;

use App\user; //App\Userクラスの試用を宣言する（Dean追加）
use Illuminate\Http\Request;

class HimanabiController extends Controller
{




    // public function create()
    // {
    //     // views/himanabi/create.blade.phpを表示する
    //     return view('himanabi.create');
    // }


    public function index(){

    	return view('himanabi.index');

    }


    public function account(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::first();//最初のデータのみ取得
        return view('himanabi.account',['datas'=>$datas]);
    }

    public function about(){
        return view('himanabi.about');
    }

}
