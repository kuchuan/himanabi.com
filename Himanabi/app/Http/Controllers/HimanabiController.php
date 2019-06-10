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

    public function createaccount(){
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        $datas = User::all(); //全件取得
        // $datas = User::first();//最初のデータのみ取得
        // dd($datas);
        return view('himanabi.createaccount',['datas' => $datas]);
    }

    public function account($id){
        $himanabi = himanabi::find($id);
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
        $himanabi->Interest01 =$request->Interest01;
        $himanabi->Interest02 =$request->Interest02;
        $himanabi->Interest03 =$request->Interest03;
        $himanabi->Interest04 =$request->Interest04;
        $himanabi->Interest05 =$request->Interest05;
        $himanabi->Interest06 =$request->Interest06;
        $himanabi->Interest07 =$request->Interest07;
        $himanabi->Interest08 =$request->Interest08;
        $himanabi->Interest09 =$request->Interest09;
        $himanabi->Interest10 =$request->Interest10;
        $himanabi->Interest11 =$request->Interest11;
        $himanabi->Interest12 =$request->Interest12;
        $himanabi->Interest13 =$request->Interest13;
        $himanabi->Interest14 =$request->Interest14;
        $himanabi->Interest15 =$request->Interest15;
        $himanabi->Interest16 =$request->Interest16;
        $himanabi->Interest17 =$request->Interest17;
        $himanabi->Interest18 =$request->Interest18;

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
