<?php

namespace App\Http\Controllers;

use App\user; //App\Userクラスの試用を宣言する（Dean追加）
use Illuminate\Http\Request;
use App\User;

class HimanabiController extends Controller
{




    // public function create()
    // {
    //     // views/himanabi/create.blade.phpを表示する
    //     return view('himanabi.create');
    // }


    public function index(){
        $users = User::all();
        // $users = User::all()->take(3);

    	return view('himanabi.index', ["users" => $users]);

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
