@extends('layout')

@section('title')
スキル登録画面
@endsection

@section('content')

<!--検証用-->
{{--         @foreach ($datas as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->nickname }}</li>
        @endforeach --}}

            <li>{{ $datas->id }},{{ $datas->name }},{{ $datas->nickname }},{{ $datas->birthday }},{{ $datas->email}},{{ $datas->password }},{{ $datas->language }},{{ $datas->area }},

            	{{ $datas->skills_name }}
            	@foreach($datas->skills as $skill)
            		{{ $skill->skills_name }}
            	@endforeach
						</li>
<!--./検証用-->

<form>

<div class="container border" ><!--secondContainer-->
		<div class="row infoPart">
			<div class="col-sm-1" style="background-color:;">
				両サイドの空白カラム
			</div>

			<div class="col-sm-10 my-md-5 rounded p-3 shadow-sm" style="background-color:#FFFFCC"><!--中央パート-->
					<p class="h4 ml-3 text-left text-info font-weight-bold">あなたが<span style="color:red">提供できるスキル</span>に関連のある項目を選びましょう</p>
					<p type="text" class="mb-0 text-right text-info" ><i class="fas fa-eraser fa-border fa-1x mr-3 border-info">：このページを最初から始める</i></p>
						<div class="ml-3 text-left text-muted font-weight-bold">＊必須項目</div>

				<div class="row justify-content-between">
				<div clas="col-1"></div><!--中央パートの左余白-->
				<div class="col-5"><!--中央パートの左側-->
							<div class="form-group text-left"><!--カテゴリ-->
								<label class="small text-info" for="exampleSelect1exampleFormControlSelect1">カテゴリ＊</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>語学</option>
									<option>教育</option>
									<option>運動</option>
									<option>芸術</option>
									<option>食べる</option>
									<option>買う</option>
									<option>家庭</option>
									<option>子育て</option>
								</select>
							</div><!--./カテゴリ-->

								<div class="form-group text-left">
									<label class="small text-info" for="inputSkill">スキル名＊</label>
									<input type="text" class="form-control" id="inputSkill" placeholder="スキルの名前を入力してください">
								</div>

								<div class="form-group text-left">
									<label class="small text-info" for="textArea1">経験期間＊</label>
										<div class="input-group mb-3">
										  <input type="text" class="form-control" placeholder="期間を記入してください" aria-label="希望期間" aria-describedby="basic-addon2">
										  <div class="input-group-append">
										    <span class="input-group-text" id="basic-addon2">年間（0.0）</span>
										  </div>
										</div>
								</div>

						  <div class="form-group text-left">
						    <label class="small text-info" for="textArea1">説明＊</label>
						    <textarea class="form-control" id="textArea1" rows="3"></textarea>
						  </div>
				</div>{{-- 中央パートの左側 --}}

				<div class="col-5"><!--中央パートの右側-->

							<div class="form-group text-left" style="align-self:flex-end">
								<label class="small text-info" for="areaSelect2">希望エリア</label>
								<select class="form-control" id="areaSelect2">
									<option>らふぐ</option>
									<option>まんだうえ</option>
									<option>ばにらっど</option>
									<option>かさんばがん</option>
									<option>まくたん</option>
									<option>いろいろ</option>
									<option>その他</option>
								</select>
							</div>

				  <div class="form-group text-left">
					 	<label class="small text-info" for="profilePicture">スキルに関連する写真</label><br>
						<figure class="figure">
							  <svg class="mb-0 bd-placeholder-img figure-img img-fluid rounded mx-auto d-blocks" width="240" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><rect width="100%" height="100%" fill="#868e96"/><text class="small" x="18%" y="50%" fill="#dee2e6" dy=".3em">スキル写真</text></svg>
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
											    <input type="file" id="inputFile">
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
									        <button type="button" class="btn btn-primary">変更を保存する</button>
									      </div><!-- /.modal-footer -->
									    </div><!-- /.modal-content -->
									  </div><!-- /.modal-dialog -->
									</div><!-- /.modal -->

				</div>{{-- ./中央パートの右側 --}}
				<div clas="col-1"></div><!--中央パートの右余白-->
				</div>

				<br>

				<div class="row justify-content-between">
					<div clas="col-1"></div><br>
						<div class="col-10">

							<div class="form-group text-left ">{{-- チェックボックス --}}
								<label class="small text-info p-3">あなたが興味をもっていること・ものにチェックを入れてください</label>
								  <div class="checkbox">
		                    <div class="form-row" id="checkRadios1">
	                          <div class="form-check form-check-inline small ml-2">
                              <label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox01">：本・コミック・雑誌　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox02">：芸能・アニメ　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox03">：ミュージック　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox04">：家電・カメラ・AV機器</label>
														</div>
												</div>
												<hr>
												<div class="form-row" id="checkRadios2">
														<div class="form-check form-check-inline small ml-2">
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox05">：ＰＣ・ガジェット　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox06">：ホーム＆キッチン　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox07">：美容・健康　　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox08">：ファッション・貴金属</label>
														</div>
												</div>
												<hr>
												<div class="form-row" id="checkRadios3">
														<div class="form-check form-check-inline small ml-2">
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox09">：子育て・介護　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox10">：動物・ペット　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox11">：仕事・オフィス　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox12">：スポーツ・アウトドア</label>
														</div>
												</div>
												<hr>
												<div class="form-row" id="checkRadios4">
														<div class="form-check form-check-inline small ml-2">
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox13">：芸術・アート　　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox14">：食品・飲料・酒　　　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox15">：金融・ファイナンス　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox16">：おもちゃ・ゲーム　　</label>
														</div>
												</div>
												<hr>
												<div class="form-row" id="checkRadios5">
														<div class="form-check form-check-inline small ml-2">
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox17">：自動車・バイク・船　</label>
															<label class="checkbox-inline ml-1"><input type="checkbox" value="" id="checkBox18">：ＤＩＹ・ハンドメイド</label>
							              </div>
						            </div>
									 </div> <!--./div class="checkbox"-->
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



{{-- 	 <a href="{{ route('diary.create') }}" class ="btn btn-primary">新規投稿</a>
>>>>>>> 38358ec5ee63c3b2fc4322b94ba4ea37ef0fe71f
	@foreach ($diaries as $diary)
		<div class="m-4 p-4 border border-primary">
			<p>{{ $diary['title'] }}</p>
			<p>{{ $diary['body'] }}</p>
			<p>{{ $diary['created_at'] }}</p>

	@if(Auth::check() && Auth::user()->id == $diary['user_id'])
			<a class="btn btn-outline-success" href="{{ route('diary.edit', ['id' => $diary['id']]) }}"><i class="fas fa-edit">：編集</i></a>

			<form action="{{ route('diary.destory', ['id' => $diary['id']]) }}" method="POST" class="d-inline">
				@csrf
				@method('delete')
				<button class="btn btn-outline-danger"><i class="fas fa-trash-alt">：削除</i></button>
			</form>
		@endif

		</div>
	@endforeach --}}

@endsection
