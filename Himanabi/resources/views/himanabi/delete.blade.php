@extends('layout')
<link rel="stylesheet" href="/css/delete.css">


@section('content')
       <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">データ削除</h1>
          
            <p style="margin:30px;"> 
            <button type="button" class="btn btn-primary">あなたの学びたいスキルを削除する</button></p>
            <p style="margin:30px;"> 
            <button type="button" class="btn btn-primary">あなたの提供するスキルを削除する</button></p>
            <button type="button" class="btn btn-info btn-lg">あなたのアカウントを削除する</button>
            <p style="margin:30px;">※すべてのデータが削除されます</p>

            <p>パスワード確認<p>

            <p style="margin:20px;"><input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""></p>
            </form>

            <div class="btn-group" role="group" aria-label="基本のボタングループ">
                <div class="mx-auto">
              <button type="button" class="btn btn-outline-dark">もどる</button>
             <button type="button" class="btn btn-outline-primary">削除する</button>
                 
                </div>
            </div>

        </div>

@endsection