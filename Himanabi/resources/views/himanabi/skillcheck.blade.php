@extends('layout')

@section('title')
スキル確認画面
@endsection

@section('content')


{{-- <div class="container border pt-5" > --}}

 <!-- Team -->
<section id="team" class="p-5">
    <div class="container">
        <h3 class="section-title pt-5 font-weight-bold">あなたが<span style="color:red">登録する</span>スキルのカードを表示します。</h3>
        <div class = "row justify-content-center ">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card p-1 m-1" style="width: 100%; height: 400px;">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">{{ ($datas->skills_name) }}</h4>
                                    <p class="card-text">名前：{{$datas->user->name}}</p>
                                    <p class="card-text">提供エリア：{{$datas->skills_area}}</p>
                                    <p class="card-text">使用言語：{{$datas->user->language}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="btn-circle-fishy">いいね</a>
                                    <a href="#" class="btn-circle">📩</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card p-1 m-1" style="width: 100%; height: 400px;">
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{ ($datas->skills_name) }}</h4>
                                    <p class="card-text small text-left">{{$datas->skills_explanation }}</p>
                                    <p class="card-text small">経験：{{$datas->skills_experience}}年</p>
                                    <p class="card-text small">更新日：****-**-**</p>
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
        </div>
    </div>
            <br>

            <div class="input-button pb-3">
            <button type="button" class="btn btn-outline-dark border-dark">登録画面にもどる</button>
                <button type="button" class="btn btn-primary">　　登録する　　</button>
            </div>

</section>

@endsection
