<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class HimanabiController extends Controller
{

     public function index(){
                //ログイン管理画面
                $datas = User::first();//最初のデータのみ取
                return view('himanabi.index',['datas'=>$datas]);
           }



    // public function create()
    // {
    //     // views/himanabi/create.blade.phpを表示する
    //     return view('himanabi.create');
    // }


    // public function index(){

    // 	return view('himanabi.index');

    // }


    public function account(){
        //アカウント管理画面

        // $users = user::with('id')->get();
    	return view('himanabi.account');
    }

    public function about(){
        return view('himanabi.about');
    }

  
}
