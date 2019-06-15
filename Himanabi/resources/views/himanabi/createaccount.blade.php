@extends('layout')

@section('title')
アカウント新規登録
@endsection

@section('content')


<form action="{{ route('himanabi.createaccount') }}" method="POST">
@csrf
<div class="container pt-5" ><!--firstContainer-->
    <div class="row infoPart">
        <div class="col-sm-1" style="background-color:;">
            {{-- 両サイドの空白カラム --}}
        </div>

        <div class="col-sm-10 my-md-5 rounded p-3 shadow-sm" style="background-color:#FFFFCC"><!--中央パート-->

            <p class="h4 ml-3 text-left text-info font-weight-bold">あなたの<span style="color:red">アカウント</span>を作りましょう</p>
            <p type="text" class="mb-0 text-right text-info" ><i class="fas fa-trash-alt fa-border fa-1x mr-3 border-info">：ユーザー削除はこちら</i></p>
                <div class="ml-3 text-left text-muted font-weight-bold">＊必須項目</div>

            <div class="row justify-content-between">
                <div clas="col-1"></div>
                <div class="col-5"><!--中央パートの左側-->
                    <div class="form-group text-left">
                        <label class="small text-info" for="inputName">お名前＊（姓名には空白” ”を入れる）</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="令泉 和也" value="{{ old('name') }}">
                    </div>
                    <div class="form-group text-left">
                        <label class="small text-info" for="nickname">ニックネーム*</label>
                        <input type="text" class="form-control" name="nickname" id="nickname" placeholder="げんごうくん" value="{{ old('nickname') }}">
                        {{-- <small class="text-muted">本サイトではニックネームが使われます。</small> --}}
                    </div>
                  <div class="form-group text-left">
                        <label class="small text-info" for="profilePicture">プロフィール写真</label><br>
                        <figure class="figure">
                              <svg class="mb-0 bd-placeholder-img figure-img img-fluid rounded mx-auto d-blocks" width="240" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><rect width="100%" height="100%" fill="#868e96"/><text class="small" x="18%" y="50%" fill="#dee2e6" dy=".3em">プロフィール写真</text></svg>
                        </figure>
                    </div>

                        <!-- 切り替えボタンの設定 -->
                            <button type="button" class="btn btn-default border btn-sm border-dark">
                                画像ファイルの削除
                            </button>
                            <button type="button" class="btn btn-primary btn-sm small" data-toggle="modal" data-target="#myModal">
                              画像ファイルの読込
                            </button>
                                    <!-- モーダルの設定 -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h6 class="modal-title" id="modalLabel">画像ファイルの読み込み</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            {{-- <label for="inputFile">画像ファイルを指定してください</label> --}}
                                                <input type="file" name="picture" id="picture">
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            <button type="button" class="btn btn-primary">変更を保存</button>
                                          </div><!-- /.modal-footer -->
                                        </div><!-- /.modal-content -->
                                      </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                    <div class="form-group text-left">
                        <label class="small text-info" for="birthday">生年月日</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="2000-1-1" value="{{ old('birthday') }}">
                    </div>
                </div><!--/.中央パートの左側-->


                <div class="col-5"><!--中央パートの右側-->
                        <div class="form-group text-left">
                            <label class="small text-info" for="email">E-mail*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Eメールアドレス" value="{{ old('email') }}">
                        </div>
                        <div class="form-group text-left">
                            <label class="small  text-info" for="email_verified_at">E-mail確認用</label>
                            <input type="email" class="form-control" name="email_verified_at" id="email_verified_at" placeholder="Eメールアドレスの確認" value="{{ old('email_verified_at') }}">
                            <small class="text-muted">あなたのメールは本サイトからは共有しません。</small>
                        </div>
                        <div class="form-group text-left">
                            <label class="small text-info" for="password">パスワード*</label>
                            <input type="password" class="form-control"{{ $errors->has('password') ? ' is-invalid' : '' }} name="password" id="password" placeholder="パスワード" value="{{ old('password') }}">
                        </div>
                        <div class="form-group text-left">
                            <label class="small text-info" for="remember_token">パスワード確認用</label>
                            <input type="password" class="form-control" name="remember_token" id="remember_token" placeholder="パスワードの確認" value="{{ old('remember_token') }}">
                        </div>
                        <div class="form-group text-left">
                            <label class="small text-info" for="language">使用言語</label>
                            <select class="form-control" name="language" id="language" value="{{ old('language') }}">
                                <option >日本語</option>
                                <option >英語</option>
                                <option >中国語</option>
                                <option >韓国語</option>
                                <option >その他</option>
                            </select>
                        </div>
                        <div class="form-group text-left">
                            <label class="small text-info" for="area">居住エリア</label>
                            <select class="form-control" name="area" id="area" value="{{ old('area') }}">
                                <option >ラフグ</option>
                                <option >マンダウエ</option>
                                <option >バニラッド</option>
                                <option >カサンバガン</option>
                                <option >マクタン</option>
                                <option >イロイロ</option>
                                <option >その他</option>
                            </select>
                        </div>
                    </div><!--/.中央パートの右側-->
                    <div clas="col-1"></div>
        </div><!--/.中央パートのrow設定-->
     </div><!--/.中央パート-->
           <div class="col-sm-1" style="background-color:;">
             {{-- 右サイドの空白カラム --}}
             </div>
    </div><!-- /.infoPart -->
    <i class="fas fa-caret-down fa-3x text-info"></i>

</div><!--/.firstContainer-->


<div class="container" ><!--secondContainer-->
        <div class="row infoPart">
            <div class="col-sm-1" style="background-color:;">
                {{-- 両サイドの空白カラム --}}
            </div>

            <div class="col-sm-10 my-md-5 rounded p-3 shadow-sm" style="background-color:#FFFFCC"><!--中央パート-->
                    <p class="h4 ml-3 text-left text-info font-weight-bold">あなたが<span style="color:red">学びたいスキル</span>に関連のある項目を選びましょう</p>
                    <p type="text" class="mb-0 text-right text-info" ><i class="fas fa-eraser fa-border fa-1x mr-3 border-info">：このページを最初から始める</i></p>
                        <div class="ml-3 text-left text-muted font-weight-bold">＊必須項目</div>

                <div class="row justify-content-between">
                <div clas="col-1"></div><!--中央パートの左余白-->
                <div class="col-5"><!--中央パートの左側-->
                            <div class="form-group text-left"><!--カテゴリ-->
                                <label class="small text-info" for="skills_category">カテゴリ＊</label>
                                <select class="form-control" name="skills_category" id="skills_category" value="{{ old('skills_category') }}">
                                    <option >語学</option>
                                    <option >教育</option>
                                    <option >運動</option>
                                    <option >芸術</option>
                                    <option >食品</option>
                                    <option >ビジネス</option>
                                    <option >制作</option>
                                    <option >家庭</option>
                                    <option >その他</option>
                                </select>
                            </div><!--./カテゴリ-->

                                <div class="form-group text-left">
                                    <label class="small text-info" for="skills_name">スキル名＊</label>
                                    <input type="text" class="form-control" name="skills_name" id="skills_name" value="{{ old('skills_name') }}" placeholder="スキルの名前を入力してください ">
                                </div>

                                <div class="form-group text-left">
                                    <label class="small text-info" for="textArea1">希望期間</label>
                                        <div class="input-group mb-3">
                                          <input type="number" class="form-control" placeholder="期間を記入してください" aria-label="希望期間" aria-describedby="skills_get" value="{{ old('skills_get') }}">
                                          <div class="input-group-append">
                                            <span class="input-group-text" name="skills_get" id="skills_get" >週間（0.0）</span>
                                          </div>
                                        </div>
                                </div>

                          <div class="form-group text-left">
                            <label class="small text-info" for="skills_enthusiasm">意気込み</label>
                            <textarea class="form-control" name="skills_enthusiasm" id="skills_enthusiasm" rows="3">{{ old('skills_enthusiasm') }}</textarea>
                          </div>
                </div>{{-- 中央パートの左側 --}}

                <div class="col-5"><!--中央パートの右側-->
                            <div class="form-group text-left" style="align-self:flex-end">
                                <label class="small text-info" for="skills_area">希望エリア</label>
                                <select class="form-control"name="skills_area" id="skills_area" value="{{ old('skills_area') }}">
                                    <option >ラフグ</option>
                                    <option >マンダウエ</option>
                                    <option >バニラッド</option>
                                    <option >カサンバガン</option>
                                    <option >マクタン</option>
                                    <option >イロイロ</option>
                                    <option >その他</option>
                                </select>
                            </div>
                            <input type="hidden" class="form-control" name="toggle_user" id="toggle_user"  value="0" >
                            {{-- 自分のスキルは"0" --}}
                </div>{{-- ./中央パートの右側 --}}
                <div clas="col-1"></div><!--中央パートの右余白-->
                </div>

                <div class="row justify-content-between">
                    <div clas="col-1"></div><br>
                        <div class="col-10">

                            <div class="form-group text-left pt-2">{{-- チェックボックス --}}

                                <label class="small text-info p-3">あなたが興味をもっていること・ものにチェックを入れてください</label>
                                  <div class="checkbox">
                                    <div class="form-row" id="checkBoxies1">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest01" id="interest01" value="0" {{ old('interest01') }}>：本・コミック・雑誌　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest02" id="interest02" value="0" {{ old('interest02') }}>：芸能・アニメ　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest03" id="interest03" value="0" {{ old('interest03') }}>：ミュージック　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest04" id="interest04" value="0" {{ old('interest04') }}>：家電・カメラ・AV機器</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies2">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest05" id="interest05" value="0" {{ old('interest05') }}>：ＰＣ・ガジェット　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest06" id="interest06" value="0" {{ old('interest06') }}>：ホーム＆キッチン　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest07" id="interest07" value="0" {{ old('interest07') }}>：美容・健康　　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest08" id="interest08" value="0" {{ old('interest08') }}>：ファッション・貴金属</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies3">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest09" id="interest09" value="0" {{ old('interest09') }}>：子育て・介護　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest10" id="interest10" value="0" {{ old('interest10') }}>：動物・ペット　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest11" id="interest11" value="0" {{ old('interest11') }}>：仕事・オフィス　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest12" id="interest12" value="0" {{ old('interest12') }}>：スポーツ・アウトドア</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies4">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest13" id="interest13" value="0" {{ old('interest13') }}>：芸術・アート　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest14" id="interest14" value="0" {{ old('interest14') }}>：食品・飲料・酒　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest15" id="interest15" value="0" {{ old('interest15') }}>：金融・ファイナンス　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest16" id="interest16" value="0" {{ old('interest16') }}>：おもちゃ・ゲーム　　</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies5">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest17" id="interest17" value="0" {{ old('interest17') }}>：自動車・バイク・船　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest18" id="interest18" value="0" {{ old('interest18') }}>：ＤＩＹ・ハンドメイド</label>
                                            </div>
                                    </div>
                                  </div> <!--./div class="checkbox" -->
                            </div>{{-- ./チェックボックス --}}
                      <br>
              </div>{{-- ./col-10 --}}
              <br>
            <div class="col-1"></div>
        </div><!--class="row justify-content-between-->
            </div><!--中央パート-->
            <div class="col-sm-1" style="background-color:;">
                  {{-- 両サイドの空白カラム --}}
            </div>
        </div>
                  <i class="fas fa-caret-down fa-3x text-info pb-2"></i>
                  <br>
            <div class="input-button">
                <button type="button" class="btn btn-outline-dark border-dark">破棄する</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCheckModal">登録する</button>
            </div>
        <!-- 登録モーダルの設定 -->
        <div class="modal fade" id="myCheckModal" tabindex="-1" role="dialog" aria-labelledby="myCheckModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="modalLabel">個人と希望スキル情報登録の確認</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
                <button type="submit" class="btn btn-primary">情報を登録する</button>
              </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
        <!-- /.登録modalの終了 -->

        <p class="text-info font-weight-bold">
            <br>提供できるスキルがあれば、
            <br>『あなたのスキル登録』から登録をお願いします。
        </p>

</div>

</form>
<br>

@endsection
