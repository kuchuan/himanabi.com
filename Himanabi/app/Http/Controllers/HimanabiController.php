<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimanabiController extends Controller
{

   



    // public function create()
    // {
    //     // views/himanabi/create.blade.phpを表示する
    //     return view('himanabi.create');
    // }


    public function index(){
    	return views('himanabi.index');
    }

  }

