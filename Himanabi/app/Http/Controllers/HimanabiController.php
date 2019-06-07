<?php

namespace App\Http\Controllers;

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
    	return view('himanabi.account');
    }

    public function about(){
        return view('himanabi.about');
    }

}
