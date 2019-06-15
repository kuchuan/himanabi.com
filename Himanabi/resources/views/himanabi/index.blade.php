@extends('layout')

@section('title')
トップページ 一覧
@endsection

@section('content')


{{-- {{ var_dump($datas->find(21)->name) }}
{{ var_dump($datas[0]->skills[0]) }} --}}



{{-- caroucel --}}
  <div id="carouselExampleControls" class="carousel slide pt-5 pb-3" data-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <p class="colorfilter-base">
            <img src="/img/top1.png" height="100%"  width="100%" class="d-block colorfilter-image" alt="study.jpg">
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
      <div class="good">
          <img src="/img/asset.png" width="100%" height="100%">
      </div>
  </div>

  <form class="form5 dark pt-2" method="post" action="" style="padding-left: 200px;">
    <div class = "form clearfix">
        <div class="cp_ipselect">
            <select class="cp_sl06" required>
            <option value="" hidden disabled selected></option>
            <option value="1">語学</option>
            <option value="2">教育</option>
            <option value="3">運動</option>
            <option value="4">芸術</option>
            <option value="5">食品</option>
            <option value="6">ビジネス</option>
            <option value="7">制作</option>
            <option value="8">家庭</option>
            <option value="9">その他</option>
            </select>
            <span class="cp_sl06_highlight"></span>
            <span class="cp_sl06_selectbar"></span>
            <label class="cp_sl06_selectlabel">カテゴリーで選ぶ</label>
        </div>

        <div class="cp_ipselect">
            <select class="cp_sl06" required>
            <option value="" hidden disabled selected></option>
            <option value="1">ラフグ</option>
            <option value="2">マンダウエ</option>
            <option value="3">バニラット</option>
            <option value="4">カサンバガン</option>
            <option value="5">マクタン</option>
            <option value="6">イロイロ</option>
            <option value="7">その他</option>
            </select>
            <span class="cp_sl06_highlight"></span>
            <span class="cp_sl06_selectbar"></span>
            <label class="cp_sl06_selectlabel">場所で選ぶ</label>
        </div>

        <div class = "inputbox">
          <input class="sbox5" type="text" name="inputbox" placeholder="フリーワード( ex. ピアノ、英語、水泳）">
             <button class="cp_ipselect sbtn5 btn-dark">
                <i class="fas fa-search"></i><span>検索</span>
            </button>
        </div>
    </div>

  </form>

@guest
@else
@endguest

  <!-- Team -->
<section id="team">
    <div class="container">
        <h3 class="section-title">新着情報</h3>
        <div class="row">

            <!-- Team member -->
            {{-- <li>{{ $datas->id }},{{ $datas->name }},{{ $datas->nickname }},{{ $datas->birthday }},{{ $datas->email}},{{ $datas->password }},{{ $datas->language }},{{ $datas->area }}, --}}

            @foreach($datas->take(6) as $user)

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">{{ ($datas[0]->name) }}</h4>
                                    <p class="card-text">{{$datas[0]->skills[0]->skills_name}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                     <a href="#" class="btn-circle-fishy">いいね</a>
                                     <a href="#" class="btn-circle">📩</a>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{ ($datas[0]->name) }}</h4>
                                    <p class="card-text">{{$datas[0]->skills[0]->skills_explanation }}</p>
                                    <ul class="list-inline">
                                        {{-- <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li> --}}
                                        {{-- <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    @guest
    <h3 class="section-title">あなたへのおすすめ</h3>
    @else
    <h3 class="section-title">{{Auth::user()->name}}さんへのおすすめ</h3>
    @endguest

        <div class="row">
            <!-- Team member -->
            {{-- <li>{{ $datas->id }},{{ $datas->name }},{{ $datas->nickname }},{{ $datas->birthday }},{{ $datas->email}},{{ $datas->password }},{{ $datas->language }},{{ $datas->area }}, --}}

         {{-- @foreach($datas->skills->random(3) as $skill) --}}
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                    <h4 class="card-title">{{ ($datas[6]->name) }}</h4>
                                    <p class="card-text">{{$datas[6]->skills[0]->skills_name}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="btn-circle-fishy">いいね</a>
                                    <a href="#" class="btn-circle">📩</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">{{$datas[6]->skills[0]->skills_explanation }}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      {{-- @endforeach --}}
{{--             </li>
 --}}

        </div>
    </div>

@endsection
