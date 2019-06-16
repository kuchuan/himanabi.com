@extends('layout')

@section('title')
トップページ 一覧
@endsection

@section('content')


{{-- {{ var_dump($datas->find(21)->name) }}
{{ var_dump($datas[0]->skills[0]) }} --}}


<div class="introduction">
{{-- caroucel --}}
      <div id="carouselExampleControls" class="carousel slide pt-5 pb-3" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <p class="colorfilter-base">
                <img src="/img/top1.png" height="100%"  width="100%" class="d-block colorfilter-image" alt="">
              </p>
            </div>

            <div class="carousel-item">
             <p class="colorfilter-base">
              <img src="/img/top2.png" width="100%" height="100%" class="d-block colorfilter-image" alt="...">

             </p>
            </div>
            <div class="carousel-item">
             <p class="colorfilter-base">
              <img src="/img/top3.png" width="100%" height="100%" class="d-block colorfilter-image" alt="...">
             </p>
            </div>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>

          <div class="good">
              <img src="/img/asset.png" width="100%" height="100%">
          </div>

    <div class="searchbox">
        <div class = "row justify-content-center ">
            <div class="col-6 rounded-lg " style="background-color: black;">
                    <div class="btn-toolbar d-inline-flex flex-row text-white" role="toolbar">
                      <div class="p-2">
                            <label class="small" for="skills_category">カテゴリ</label>
                                 <select class="form-control" name="skills_category" id="skills_category" value="">
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
                      </div>
                      <div class="p-2">
                           <label class="small" for="skills_area">希望エリア</label>
                                <select class="form-control"name="skills_area" id="skills_area" value="">
                                    <option>ラフグ</option>
                                    <option>マンダウエ</option>
                                    <option>バニラッド</option>
                                    <option>カサンバガン</option>
                                    <option>マクタン</option>
                                    <option>イロイロ</option>
                                    <option>その他</option>
                                </select>
                      </div>
                      <div class="m-3 pt-4  input-group" name="text_inputbox_group" id="text_inputbox_group">
                        {{-- <label class="small text-info" for="text_inputbox_group"></label> --}}
                         <input class="sbox5 rounded-left border-white" type="text" name="text_inputbox" aria-describedby="button-addon2" placeholder="( ex.ピアノ 英語 etc. ）">
                         <div class="input-group-append btn-dark">
                            <button type="button" id="button-addon2" class="btn btn-outline-secondary text-white">検索する</button>
                         </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</div>
{{-- </div>/.container --}}

{{-- {{dd($datas)}} --}}
@guest
  <!-- Team -->
<section id="team" class="p-0">
    <div class="container">
        <h3 class="section-title">新着情報</h3>
        <div class="row">

            @foreach($datas->take(9) as $user)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card p-1 m-1" style="width: 100%; height: 400px;">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">{{ ($datas[$loop->iteration]->skills_name) }}</h4>
                                    <p class="card-text">名前：{{$datas[$loop->iteration]->user->name}}</p>
                                    <p class="card-text">提供エリア：{{$datas[$loop->iteration]->skills_area}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="btn-circle-fishy">いいね</a>
                                    <a href="#" class="btn-circle">📩</a>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card p-1 m-1" style="width: 100%; height: 400px;">
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{ ($datas[$loop->iteration]->skills_name) }}</h4>
                                    <p class="card-text small text-left">{{$datas[$loop->iteration]->skills_explanation }}</p>
                                    <p class="card-text small">経験：{{$datas[$loop->iteration]->skills_experience}}年</p>
                                    <p class="card-text small">更新日：{{$datas[$loop->iteration]->updated_at }}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           @if($loop->iteration % 6 == 0) <!--ループ回数が6回の時-->
                @guest
                </div>
                    <div>
                        <h3 class="section-title pt-4">あなたへのおすすめ</h3>
                    </div>
                    <div class="row">
                @else
                    <div>
                        <h3 class="section-title">{{Auth::user()->name}}さんへのおすすめ</h3>
                    </div>
                @endguest
            @else
            @endif

            @endforeach

        </div>

@else

@endguest



@endsection
