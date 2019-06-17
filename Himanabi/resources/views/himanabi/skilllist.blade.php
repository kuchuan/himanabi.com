@extends('layout')

@section('title')
いいね一覧画面
@endsection

@section('content')


{{-- <div class="container border pt-5" > --}}
@guest
  <!-- Team -->
<section id="team" class="p-5">
    <div class="container">
        <<h3 class="section-title pt-5 font-weight-bold">あなたが<span style="color:red">選んだ</span>（いいねをした）スキルのカードを表示します</h3>
        <div class="row">

            @foreach($datas->take(3) as $user)
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
                                    <p class="card-text">使用言語：{{$datas[$loop->iteration]->user->language}}</p>
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

            @endforeach

        </div>
@else

@endguest
            <br>

            <div class="input-button pb-3">
                <button type="button" class="btn btn-outline-dark border-dark">ホーム画面にもどる</button>
            </div>


@endsection
