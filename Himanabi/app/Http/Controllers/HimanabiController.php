<?php

namespace App\Http\Controllers;

use App\User; //App\Userクラスの試用を宣言する（Dean追加）
use App\Skill; //App\Skillクラスの試用を宣言する
use App\Skill_user; //App\Skill_userクラスの試用を宣言する
use Illuminate\Http\Request;


class HimanabiController extends Controller
{




    // public function create()
    // {
    //     // views/himanabi/create.blade.phpを表示する
    //     return view('himanabi.create');
    // }



    public function index(){
        // $users = Skill::with('user')->get();
        // $datas = User::all();
        // $skills = Skill::all();
        // var_dump($skills);
        // exit();
        $datas = User::with('skills')->get();
        // $users = User::all()->take(3);
        // $skills = Skill_user::with('user')->get();
        // dd($skills->skills_explanation);
        return view('himanabi.index', ['datas' => $datas]);
    }

     // public function paginate() {

     //    $likes = Like::paginate(10);
     //    return view('like', ['like' => $likes,]);

     // }

    public function account(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::first();//最初のデータのみ取得

        return view('himanabi.account',['datas' => $datas]);
    }

    public function about(){
        return view('himanabi.about');
    }

    public function show(){
        return view('himanabi.show');

    }

    public function like(){

        $datas = User::with('skills')->get();
        $posts = User::latest()->paginate(5);

        return view('himanabi.like',["datas" => $datas]);
    }

    public function description(){
        return view("himanabi.description");
    }


        public function test(){

        return view('himanabi.test'); //Dean動作検証中

    }

    public function skill(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::first();//最初のデータのみ取得
        return view('himanabi.skill',['datas' => $datas]);
    }

}
