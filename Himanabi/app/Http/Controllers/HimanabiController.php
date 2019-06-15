<?php

namespace App\Http\Controllers;

use App\user; //App\Userクラスの使用を宣言する（Dean追加）
use App\skill; //App\skillクラスの使用を宣言する（Dean追加）
use App\Http\Requests\CreateHimanabi;//CreateHimanabi   クラスの試用を宣言する（Dean追加）
use App\Skill_user; //App\Skill_userクラスの試用を宣言する
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        return view('himanabi.index',['datas' => $datas]);
    }

    public function description(){

        return view('himanabi.description');

    }


    public function loginmach($id){


        $datas = User::with('skills')->get(); //ここにはマッチングアルゴリズムを書く予定

        return view('Himanabi.index',['datas' => $datas]);
    }

     // public function paginate() {

     //    $likes = Like::paginate(10);
     //    return view('like', ['like' => $likes,]);

     // }

    public function createaccount(){  //アカウント作成画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        // $datas = User::first();//最初のデータのみ取得
        $datas = User::with('skills')->first(); //with()を使ってUserモデル(User.php)に指定したリレーション(skill)を取得。with()はリレーション先にデータがなくても取得される。
        // var_dump($datas);
        // dd($datas);
        // $skills = Skill::all();
        return view('himanabi.createaccount',['datas' => $datas]);
    }

    public function account($accountid){
        $accountid= 23;
        // $id = $request->id;
        //アカウント管理画面
        //$datas =DB::select('select * from user');
        // $datas = User::all(); //全件取得
        $datas = User::with('skills')->find($accountid);//見つけたデータのみ取得
        // dd($datas);

        return view('himanabi.account',['datas' => $datas]);
    }

    public function store(CreateHimanabi $request){
        //保存処理POST送信のデータの受け取り（以前は$_POSTで受けていた）
        //Laravelでは＄_POSTの代わりにRequestクラスを使う
        // dd($request);
        // dd($request->skills_name);
        //Modelクラスuserを使用する
        $users = new User();// インスタンス化
        //ここからusersテーブル
        $users->name = $request->name;
        $users->email= $request->email;
        $users->password = $request->password;
        $users->birthday = $request->birthday;
        $users->language = $request->language;
        $users->area = $request->area;
        $users->picture = $request->picture;

        $users->save(); //DBに保存

        var_dump($users["id"]);//Dean確認用
        // dd($users->id);//Dean確認用

        $skills = new Skill();
        //ここからskillsテーブル
        $skills->toggle_user = $request->toggle_user; //参照するwebページ(view)でhidden属性を入れて不可視化している
        $skills->skills_category = $request->skills_category;
        // $skills->user_id = Auth::user()->id; //追加 ログインしてるユーザーのidを保存
        $skills->user_id = $users["id"]; //追加 ログインしてるユーザーのidを保存
        $skills->skills_name = $request->skills_name;
        $skills->skills_experience = $request->skills_experience;
        $skills->skills_get = $request->skills_get;
        $skills->skills_explanation = $request->skills_explanation;
        $skills->skills_enthusiasm = $request->skills_enthusiasm;
        $skills->skills_area = $request->skills_area;
        //選択された画像を/public/imgにアップロード
        // 画像名を残す
        // $skills->skills_picture = $request->skills_picture->store('public/img');//後日作成
        $skills->interest01 =$request->interest01;
        $skills->interest02 =$request->interest02;
        $skills->interest03 =$request->interest03;
        $skills->interest04 =$request->interest04;
        $skills->interest05 =$request->interest05;
        $skills->interest06 =$request->interest06;
        $skills->interest07 =$request->interest07;
        $skills->interest08 =$request->interest08;
        $skills->interest09 =$request->interest09;
        $skills->interest10 =$request->interest10;
        $skills->interest11 =$request->interest11;
        $skills->interest12 =$request->interest12;
        $skills->interest13 =$request->interest13;
        $skills->interest14 =$request->interest14;
        $skills->interest15 =$request->interest15;
        $skills->interest16 =$request->interest16;
        $skills->interest17 =$request->interest17;
        $skills->interest18 =$request->interest18;
        $skills->interest19 =$request->interest19;
        $skills->interest20 =$request->interest20;

        $skills->save(); //DBに保存

            //一覧ページに戻る（リダイレクト処理）
            return redirect()->route('himanabi.createaccount');//メインの画面に戻る（ただしマッチングデータでメイン画面を開く
    }

        public function accountedit($id,$user_id, CreateHimanabi $request){
        //保存処理POST送信のデータの受け取り（以前は$_POSTで受けていた）
        //Laravelでは＄_POSTの代わりにRequestクラスを使う
        // dd($request);
        // dd($request->skills_name);
        //Modelクラスuserを使用する
        $users = new User();// インスタンス化
        //ここからusersテーブル
        $users->name = $request->name;
        $users->email= $request->email;
        $users->password = $request->password;
        $users->birthday = $request->birthday;
        $users->language = $request->language;
        $users->area = $request->area;
        $users->picture = $request->picture;

        $users->save(); //DBに保存

        var_dump($users["id"]);//Dean確認用
        // dd($users->id);//Dean確認用

        $skills = new Skill();
        //ここからskillsテーブル
        $skills->toggle_user = $request->toggle_user; //参照するwebページ(view)でhidden属性を入れて不可視化している
        $skills->skills_category = $request->skills_category;
        // $skills->user_id = Auth::user()->id; //追加 ログインしてるユーザーのidを保存
        $skills->user_id = $users["id"]; //追加 ログインしてるユーザーのidを保存
        $skills->skills_name = $request->skills_name;
        $skills->skills_experience = $request->skills_experience;
        $skills->skills_get = $request->skills_get;
        $skills->skills_explanation = $request->skills_explanation;
        $skills->skills_enthusiasm = $request->skills_enthusiasm;
        $skills->skills_area = $request->skills_area;
        //選択された画像を/public/imgにアップロード
        // 画像名を残す
        // $skills->skills_picture = $request->skills_picture->store('public/img');//後日作成
        $skills->interest01 =$request->interest01;
        $skills->interest02 =$request->interest02;
        $skills->interest03 =$request->interest03;
        $skills->interest04 =$request->interest04;
        $skills->interest05 =$request->interest05;
        $skills->interest06 =$request->interest06;
        $skills->interest07 =$request->interest07;
        $skills->interest08 =$request->interest08;
        $skills->interest09 =$request->interest09;
        $skills->interest10 =$request->interest10;
        $skills->interest11 =$request->interest11;
        $skills->interest12 =$request->interest12;
        $skills->interest13 =$request->interest13;
        $skills->interest14 =$request->interest14;
        $skills->interest15 =$request->interest15;
        $skills->interest16 =$request->interest16;
        $skills->interest17 =$request->interest17;
        $skills->interest18 =$request->interest18;
        $skills->interest19 =$request->interest19;
        $skills->interest20 =$request->interest20;

        $skills->save(); //DBに保存

            //一覧ページに戻る（リダイレクト処理）
            return redirect()->route('himanabi.createaccount');//メインの画面に戻る（ただしマッチングデータでメイン画面を開く
    }


    public function show(){
        return view('himanabi.show');

    }

    public function like(){

        $datas = User::with('skills')->get();
        $posts = User::latest()->paginate(5);

        return view('himanabi.like',["datas" => $datas]);
    }


    public function about(){
        return view('himanabi.about');
    }


    public function skill($id){
        //なにか間違ってるみたい
        //アカウント管理画面
        $id = 23;
        //$datas =DB::select('select * from user');
        $datas = User::with('skills')->find($id);
        // $datas = User::all(); //全件取得
        // $datas = User::first();//最初のデータのみ取得
        // dd($datas);
        return view('himanabi.skill',['datas' => $datas]);
    }

}
