<?php

namespace App\Http\Controllers;

use App\user; //App\Userクラスの試用を宣言する（Dean追加）
use App\skill; //App\skillクラスの試用を宣言する（Dean追加）
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

    public function createaccount(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        $datas = User::all(); //全件取得
        // $datas = User::first();//最初のデータのみ取得
        // dd($datas);
        // $skills = Skill::all();
        return view('himanabi.createaccount',['datas' => $datas]);
    }

    public function account(){
        // $himanabi = himanabi::find($id);
        // dd($himanabi);
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::first();//最初のデータのみ取得
        // dd($datas);
        return view('himanabi.account',['datas' => $datas]);
    }

    public function store(CreateHimanabi $request){
        //保存処理POST送信のデータの受け取り（以前は$_POSTで受けていた）
        //Laravelでは＄_POSTの代わりにRequestクラスを使う
        // dd($request);
        // INSERT INTO テーブル名 (colum名) VALUE (値)
        // INSET INTO diaries (title. body) VALUE ($_POST['title'], $_POST['body'])
        // INSET INTO diaries (title. body) VALUE ($request ->title, $request->body)
        //ModelクラスDiaryを使用する
        $himanabi = new Himanabi();// インスタンス化
        //ここからusersテーブル
        $himanabi->name = $request->name;
        // $himanabi->email= $request->e;
        // $himanabi->password = $request->password;
        $himanabi->birthday = $request->birthday;
        $himanabi->language = $request->language;
        $himanabi->area = $request->area;
        $himanabi->picture = $request->picture;
        //ここからskillsテーブル
        $himanabi->toggle_user = "0"; //ユーザーの希望登録は"0"参照するwebページでトグルを入れ変える必要あり
        $himanabi->skills_category = $request->skills_category;
        $himanabi->user_id = Auth::user()->id; //追加 ログインしてるユーザーのidを保存
        $himanabi->skills_name = $request->skills_name;
        $himanabi->skills_experience = $request->skills_experience;
        $himanabi->skills_get = $request->skills_get;
        $himanabi->skills_explanation = $request->skills_explanation;
        $himanabi->skills_enthusiasm = $request->skills_enthusiasm;
        $himanabi->skills_area = $request->skills_area;
        // storageフォルダに画像をアップロードする
        // 選択された画像をstrage/app/public/diary_imgにアップロード
        // 画像名を残す
        $$himanabi->skills_picture = $request->skills_picture->store('public/img');
        $himanabi->interest01 =$request->interest01;
        $himanabi->interest02 =$request->interest02;
        $himanabi->interest03 =$request->interest03;
        $himanabi->interest04 =$request->interest04;
        $himanabi->interest05 =$request->interest05;
        $himanabi->interest06 =$request->interest06;
        $himanabi->interest07 =$request->interest07;
        $himanabi->interest08 =$request->interest08;
        $himanabi->interest09 =$request->interest09;
        $himanabi->interest10 =$request->interest10;
        $himanabi->interest11 =$request->interest11;
        $himanabi->interest12 =$request->interest12;
        $himanabi->interest13 =$request->interest13;
        $himanabi->interest14 =$request->interest14;
        $himanabi->interest15 =$request->interest15;
        $himanabi->interest16 =$request->interest16;
        $himanabi->interest17 =$request->interest17;
        $himanabi->interest18 =$request->interest18;
        $himanabi->interest19 =$request->interest19;
        $himanabi->interest20 =$request->interest20;

        $himanabi->save(); //DBに保存

            //一覧ページに戻る（リダイレクト処理）
            return redirect()->route('himanabi.index');//メインの画面に戻る（ただしマッチングデータでメイン画面を開く
    }

    public function about(){
        return view('himanabi.about');
    }


    public function skill(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::first();//最初のデータのみ取得
        return view('himanabi.skill',['datas' => $datas]);
    }

}
