<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimanabiController extends Controller
{
    public function index(){
    	return view('himanabi.index');
    }

    public function account(){
        //アカウント管理画面
    	return view('himanabi.account');
    }
}
