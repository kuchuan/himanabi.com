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

            <li>{{ $datas->id }},{{ $datas->name }},{{ $datas->nickname }},{{ $datas->birthday }},{{ $datas->email}},{{ $datas->password }},{{ $datas->language }},{{ $datas->area }},

            	{{-- {{ $datas->skills_name }} --}}
            	@foreach($datas->skills as $skill)
            		{{ $skill->skills_name }}
            	@endforeach
						</li>
<!--./検証用-->

<form>

<div class="container border pt-5" ><!--secondContainer-->

		<div class="row infoPart">
			<div class="col-sm-1" style="background-color:;">
				両サイドの空白カラム
			</div>

			<div class="col-sm-10 my-md-5 rounded p-3 shadow-sm" style="background-color:#FFFFCC"><!--中央パート-->

					<p class="h4 ml-3 text-left text-info font-weight-bold">あなたが<span style="color:red">提供できるスキル</span>に関連のある項目を選びましょう</p>
					<p type="text" class="mb-0 text-right text-info" ><i class="fas fa-eraser fa-border fa-1x mr-3 border-info">：このページを最初から始める</i></p>
						<div class="ml-3 text-left text-muted font-weight-bold">＊必須項目</div>

				    <div class="row justify-content-between">
				        <div clas="col-1"></div>
				        <div class="col-5"><!--中央パートの左側-->
							      <div class="form-group text-left"><!--カテゴリ-->
								        <label class="small text-info" for="skills_category'">カテゴリ＊</label>
													<select class="form-control" name="skills_category" id="skills_category'">
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
									<label class="small text-info" for="skills_name">スキル名＊</label>
									<input type="text" class="form-control" name="skills_name" id="skills_name" placeholder="スキルの名前を入力してください">
								</div>

								<div class="form-group text-left">
									<label class="small text-info" for="textArea1">経験期間＊</label>
										<div class="input-group mb-3">
										  <input type="text" class="form-control" placeholder="期間を記入してください" aria-label="経験期間" aria-describedby="basic-addon2">
										  <div class="input-group-append">
										    <span class="input-group-text" name="skills_experience" id="skills_experience">年間（0.0）</span>
										  </div>
										</div>
								</div>

						  <div class="form-group text-left">
						    <label class="small text-info" for="skills_explanation">説明＊</label>
						    <textarea class="form-control" name="skills_explanation" id="skills_explanation" rows="3"></textarea>
						  </div>
				</div>{{-- 中央パートの左側 --}}

				<div class="col-5"><!--中央パートの右側-->

							<div class="form-group text-left" style="align-self:flex-end">
								<label class="small text-info" for="skills_area">希望エリア</label>
								<select class="form-control"name="skills_area" id="skills_area">
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
											    <input type="file" name="skills_picture" id="skills_picture">
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
								<label class="small text-info p-3">あなたが興味をもっていること・ものすべてにチェックを入れてください</label>
								   <div class="checkbox">
		                    <div class="form-row" id="checkBoxies1">
                                <div class="form-check form-check-inline small ml-2">
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest01" id="interest01">：本・コミック・雑誌　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest02" id="interest02">：芸能・アニメ　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest03" id="interest03">：ミュージック　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest04" id="interest04">：家電・カメラ・AV機器</label>
                                </div>
                        </div>
                        <hr>
                        <div class="form-row" id="checkBoxies2">
                                <div class="form-check form-check-inline small ml-2">
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest05" id="interest05">：ＰＣ・ガジェット　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest06" id="interest06">：ホーム＆キッチン　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest07" id="interest07">：美容・健康　　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest08" id="interest08">：ファッション・貴金属</label>
                                </div>
                        </div>
                        <hr>
                        <div class="form-row" id="checkBoxies3">
                                <div class="form-check form-check-inline small ml-2">
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest09" id="interest09">：子育て・介護　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest10" id="interest10">：動物・ペット　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest11" id="interest11">：仕事・オフィス　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest12" id="interest12">：スポーツ・アウトドア</label>
                                </div>
                        </div>
                        <hr>
                        <div class="form-row" id="checkBoxies4">
                                <div class="form-check form-check-inline small ml-2">
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest13" id="interest13">：芸術・アート　　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest14" id="interest14">：食品・飲料・酒　　　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest15" id="interest15">：金融・ファイナンス　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest16" id="interest16">：おもちゃ・ゲーム　　</label>
                                </div>
                        </div>
												<hr>
												<div class="form-row" id="checkBoxies5">
																<div class="form-check form-check-inline small ml-2">
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest17" id="interest17">：自動車・バイク・船　</label>
                                    <label class="checkbox-inline ml-1"><input type="checkbox" value="" name="interest18" id="interest18">：ＤＩＹ・ハンドメイド</label>
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


@endsection
