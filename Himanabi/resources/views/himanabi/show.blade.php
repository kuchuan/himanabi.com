@extends('layout')

@section('title')
スキル確認画面
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">あなたが提供するスキルのカードの確認をする</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src={{-- {{ $user->picture }} --}} alt="card image"></p>
                                    <h4 class="card-title"> 名前</h4>
                                    <p class="card-text">スキル・学びの詳細aaaaaaaaaaaaaaaaaa</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                     <a href="#" class="btn-circle-fishy"><span>いいね</span></a>
                                     <a href="#" class="btn-circle"><span class="contact">📩</span></a>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">名前</h4>
                                    <p class="card-text">???</p>
                                    {{-- <ul class="list-inline">
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
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-button">
            <button type="button" class="btn btn-outline-dark border-dark">破棄する</button>
                <button type="button" class="btn btn-primary">登録する</button>
            </div>
                </div>
            </div>





@endsection
