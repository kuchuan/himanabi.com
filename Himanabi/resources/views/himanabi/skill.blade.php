@extends('layout')

@section('title')
スキル管理
@endsection

@section('content')

<!--検証用-->
{{--         @foreach ($datas as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->nickname }}</li>
        @endforeach --}}

            {{-- <li>{{ $datas->id }},{{ $datas->name }},{{ $datas->nickname }},{{ $datas->birthday }},{{ $datas->email}},{{ $datas->password }},{{ $datas->language }},{{ $datas->area }}, --}}

            	{{-- {{ $datas->skills_name }} --}}
   {{--          	@foreach($datas->skills as $skill)
            		{{ $skill->skills_name }}
            	@endforeach --}}
						{{-- </li> --}}
<!--./検証用-->

{{-- <form action="{{ route('himanabi.skill',['id' => Auth::user()->id]) }}" method="POST"> --}}
<form action="{{ route('himanabi.skill') }}" method="POST">
@csrf
<div class="container border pt-5" ><!--secondContainer-->

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
                                <label class="small text-info" for="skills_category">カテゴリ</label>
                                <select class="form-control" name="skills_category" id="skills_category" value="{{ old('skills_category',$datas->skills_category) }}">
                                    <option {{ ($datas->skills_category)==="語学" ? 'selected' : ''}}>語学</option>
                                    <option {{ ($datas->skills_category)==="教育" ? 'selected' : ''}}>教育</option>
                                    <option {{ ($datas->skills_category)==="運動" ? 'selected' : ''}}>運動</option>
                                    <option {{ ($datas->skills_category)==="芸術" ? 'selected' : ''}}>芸術</option>
                                    <option {{ ($datas->skills_category)==="食品" ? 'selected' : ''}}>食品</option>
                                    <option {{ ($datas->skills_category)==="売買" ? 'selected' : ''}}>ビジネス</option>
                                    <option {{ ($datas->skills_category)==="物作り" ? 'selected' : ''}}>制作</option>
                                    <option {{ ($datas->skills_category)==="子育て" ? 'selected' : ''}}>家庭</option>
                                    <option {{ ($datas->skills_category)==="その他" ? 'selected' : ''}}>その他</option>
                                </select>
                            </div><!--./カテゴリ-->

                                <div class="form-group text-left">
                                    <label class="small text-info" for="skills_name">スキル名</label>
                                    <input type="text" class="form-control" name="skills_name" id="skills_name" value="{{ old('skills_name',$datas->skills_name) }}" placeholder="スキルの名前を入力してください ">
                                </div>

                                <div class="form-group text-left">
                                    <label class="small text-info" for="textArea1">経験期間</label>
                                        <div class="input-group mb-3">
                                          <input type="number" class="form-control" placeholder="期間を記入してください" aria-label="希望期間" aria-describedby="skills_experience" value="{{ old('skills_experience',$datas->skills_experience) }}">
                                          <div class="input-group-append">
                                            <span class="input-group-text" name="skills_experience" id="skills_experience" >年間（0.0）</span>
                                          </div>
                                        </div>
                                </div>

                          <div class="form-group text-left">
                            <label class="small text-info" for="skills_explanation">スキルの説明</label>
                            <textarea class="form-control" name="skills_explanation" id="skills_explanation" rows="3">{{ old('skills_explanation',$datas->skills_explanation) }}</textarea>
                          </div>
                </div>{{-- 中央パートの左側 --}}

                <div class="col-5"><!--中央パートの右側-->
                            <div class="form-group text-left" style="align-self:flex-end">
                                <label class="small text-info" for="skills_area">希望エリア</label>
                                <select class="form-control"name="skills_area" id="skills_area" value="{{ old('skills_area',$datas->skills_area) }}">
                                    <option {{ ($datas->skills_area)==="ラフグ" ? 'selected' : ''}}>ラフグ</option>
                                    <option {{ ($datas->skills_area)==="マンダウエ" ? 'selected' : ''}}>マンダウエ</option>
                                    <option {{ ($datas->skills_area)==="バニラッド" ? 'selected' : ''}}>バニラッド</option>
                                    <option {{ ($datas->skills_area)==="カサンバガン" ? 'selected' : ''}}>カサンバガン</option>
                                    <option {{ ($datas->skills_area)==="マクタン" ? 'selected' : ''}}>マクタン</option>
                                    <option {{ ($datas->skills_area)==="イロイロ" ? 'selected' : ''}}>イロイロ</option>
                                    <option {{ ($datas->skills_area)==="その他" ? 'selected' : ''}}>その他</option>
                                </select>
                            </div>
                            <input type="hidden" class="form-control" name="toggle_user" id="toggle_user"  value="1" >
                             {{-- 自分のスキルは"1" --}}
                </div>{{-- ./中央パートの右側 --}}
                <div clas="col-1"></div><!--中央パートの右余白-->
                </div>
                <br>

                <div class="row justify-content-between">
                    <div clas="col-1"></div><br>
                        <div class="col-10">

                            <div class="form-group text-left">{{-- チェックボックス --}}
                                <label class="small text-info p-3">提供するスキルと関連があること・ものにチェックを入れてください</label>
                                  <div class="checkbox">
                                    <div class="form-row" id="checkBoxies1">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest01" id="interest01" value="0" {{ old('interest01',$datas->interest01) ? 'checked="checked"' : ''}}>：本・コミック・雑誌　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest02" id="interest02" value="0" {{ old('interest02',$datas->interest02) ? 'checked="checked"' : ''}}>：芸能・アニメ　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest03" id="interest03" value="0" {{ old('interest03',$datas->interest03) ? 'checked="checked"' : ''}}>：ミュージック　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest04" id="interest04" value="0" {{ old('interest04',$datas->interest04) ? 'checked="checked"' : ''}}>：家電・カメラ・AV機器</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies2">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest05" id="interest05" value="0" {{ old('interest05',$datas->interest05) ? 'checked="checked"' : ''}}>：ＰＣ・ガジェット　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest06" id="interest06" value="0" {{ old('interest06',$datas->interest06) ? 'checked="checked"' : ''}}>：ホーム＆キッチン　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest07" id="interest07" value="0" {{ old('interest07',$datas->interest07) ? 'checked="checked"' : ''}}>：美容・健康　　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest08" id="interest08" value="0" {{ old('interest08',$datas->interest08) ? 'checked="checked"' : ''}}>：ファッション・貴金属</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies3">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest09" id="interest09" value="0" {{ old('interest09',$datas->interest09) ? 'checked="checked"' : ''}}>：子育て・介護　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest10" id="interest10" value="0" {{ old('interest10',$datas->interest10) ? 'checked="checked"' : ''}}>：動物・ペット　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest11" id="interest11" value="0" {{ old('interest11',$datas->interest11) ? 'checked="checked"' : ''}}>：仕事・オフィス　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest12" id="interest12" value="0" {{ old('interest12',$datas->interest12) ? 'checked="checked"' : ''}}>：スポーツ・アウトドア</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies4">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest13" id="interest13" value="0" {{ old('interest13',$datas->interest13) ? 'checked="checked"' : ''}}>：芸術・アート　　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest14" id="interest14" value="0" {{ old('interest14',$datas->interest14) ? 'checked="checked"' : ''}}>：食品・飲料・酒　　　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest15" id="interest15" value="0" {{ old('interest15',$datas->interest15) ? 'checked="checked"' : ''}}>：金融・ファイナンス　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest16" id="interest16" value="0" {{ old('interest16',$datas->interest16) ? 'checked="checked"' : ''}}>：おもちゃ・ゲーム　　</label>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="form-row" id="checkBoxies5">
                                            <div class="form-check form-check-inline small ml-2">
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest17" id="interest17" value="0" {{ old('interest17',$datas->interest17) ? 'checked="checked"' : ''}}>：自動車・バイク・船　</label>
                                                <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest18" id="interest18" value="0" {{ old('interest18',$datas->interest18) ? 'checked="checked"' : ''}}>：ＤＩＹ・ハンドメイド</label>
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
							両サイドの空白カラム
						</div>
	  </div>
	  			  <i class="fas fa-caret-down fa-3x text-info pb-2"></i>
	  			  <br>
			<div class="input-button">
		    <button type="button" class="btn btn-outline-dark border-dark">破棄する</button>
				<button type="button" class="btn btn-primary">確認する</button>
			</div>
				<br>

</div>

</form>
<br>


@endsection
