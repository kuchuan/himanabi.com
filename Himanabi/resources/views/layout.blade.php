<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title> 

    <link rel="stylesheet" href="/css/layout.css">{{-- りょうくん追加 --}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <script type="text/javascript" src="assets/js/description.js"></script>
<link rel="stylesheet" type="text/css" href="/css/description.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--佐藤付け足し--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- りょうくんが書いたコードここから --}}
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
 {{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link href=“https://fonts.googleapis.com/css?family=Amatic+SC:700” rel=“stylesheet”>
    {{-- りょうくんが書いたコードここまで --}}
    {{-- フォントオーサム --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
<body>

<!-- Navigation Bar -->
<header>
{{-- <form action="{{ route('himanabi.index') }}" method="POST" class="form-horizontal" > --}}
    <nav class="navbar navbar-expand-lg navStyle fixed-top">
        <a class="brand-navbar" href="/"><img src="/img/asset2.png" class="icon" alt="Responsive image" height="60px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
                <span><i class="fas fa-align-right iconStyle"></i></span>
            </button>
            <h2 class="title" >H<span class = "i">i</span>manabi</h2>
            <h6 class="site">スキルと時間のマッチング総合サイト</h6>
            <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <li class="nav-item active">
                    <a href="{{ route('himanabi.index') }}" class="nav-link">
                        <i class="fas fa-home"></i>HOME<span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a href="services.html" class="nav-link"><i class="fas fa-cogs"></i>このサイトについて</a>
                </li> --}}
                @guest
                {{-- ログインしていないとき --}}
                    <li class="nav-item">
                        <a href="{{route ('himanabi.description') }}" class="nav-link"><i class="fas fa-sort-amount-down"></i>マッチングまでの流れ</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('himanabi.about') }}" class="nav-link"><i class="fas fa-question-circle"></i>About</a>
                      @if (Auth::user() == null )
                        <li class="nav-item">
                          <a class="nav-link" style="color: white" ><i class="fas fa-users"></i>ゲストさん</a>
                        </li>
                      @endif
{{--                     <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt"></i>ログイン</a>
                    </li> #しばらく凍結 --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i>ログイン</a>
                    </li>
                @else
                {{-- ログインしているとき --}}
                    <li class="nav-item">
                      @if(Auth::check())
                      {{-- <form action="{{ route('himanabi.skilllist')}}" method="POST" class="d-inline"> --}}
                        @csrf
                        <a href="{{ url('himanabi/'.Auth::user()->id.'/skilllist') }}" class="nav-link"><i class="fas fa-address-card"></i>気になるスキル</a>
                      {{-- </form> --}}
                      @endif
                    </li>

                    <li class="nav-item">
                      @if((Auth::check()) && (Auth::user()->user_id))
                        {{-- <form action="{{ route('himanabi.skilledit')}}" method="POST" class="d-inline"> --}}
                          @csrf
                            <a href="{{ url('himanabi/'.Auth::user()->id.'/skilledit') }}" class="nav-link"><i class="fas fa-file-import"></i>{{ Auth::user()->name }}さんのスキル変更</a>
                        {{-- </form> --}}
                      @else
 {{--                        <form action="{{ route('himanabi.skillcreate')}}" method="POST" class="d-inline"> --}}
                          @csrf
                            <a href="{{ url('himanabi/'.Auth::user()->id.'/skillcreate') }}" class="nav-link"><i class="fas fa-file-import"></i>{{ Auth::user()->name }}さんのスキル追加</a>
                        {{-- </form> --}}
                      @endif
                    </li>

                    <li class="nav-item">
                      @if((Auth::check()) && (Auth::user()->user_id))
                        <form action="{{ route('himanabi.accountedit')}}" method="POST" class="d-inline">
                          @csrf
                            <a href="{{ url('himanabi/'.Auth::user()->id.'/accountedit') }}" class="nav-link"><i class="fas fa-user-edit"></i>{{ Auth::user()->name }}さんの情報管理</a>
                        </form>
                      @else
                        <form action="{{ route('himanabi.accountcreate')}}" method="POST" class="d-inline">
                          @csrf
                            <a href="{{ url('himanabi/'.Auth::user()->id.'/accountcreate') }}" class="nav-link"><i class="fas fa-user-edit"></i>{{ Auth::user()->name }}さんの情報追加</a>
                        </form>
                      @endif
                    </li>

                    <li class="nav-item">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                         <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i>ログアウト</a>
                      </form>
                    </li>
                @endguest
            </ul>
            </div>
    </nav>
</form>


    @yield('content')


</header>
<!--Bottom Footer-->
    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright">
              <p>© <span>Copyright 2019</span> <a href="#" class="transition"> himanabi.</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Bottom Footer-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
