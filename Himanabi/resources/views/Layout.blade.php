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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
<form action="{{ route('himanabi.index') }}" method="POST" class="form-horizontal" >
    @csrf
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
                        <a href="{{ route('himanabi.index') }}" class="nav-link"><i class="fas fa-address-card"></i>気になるスキル（仮）</a>
                    </li>
                    <li class="nav-item">
                      @if(Auth::check())
                     {{--  <form action="{{ route('himanabi.skill', ['id' => Auth::user()->id]) }}" class="d-inline">
                        @method('POST')
                        @csrf --}}
                        <a href="{{ route('himanabi.skill',['id' => Auth::user()->id]) }}" name="skillid" class="nav-link"><i class="fas fa-file-import"></i>{{ Auth::user()->name }}さんのスキル</a>
                      {{-- </form> --}}
                      @endif
                    </li>

                    <li class="nav-item">
                      @if(Auth::check())
                      {{-- <form action="{{ route('himanabi.account', ['id' => Auth::user()->id]) }}" class="d-inline">
                        @method('POST')
                        @csrf --}}
                        <a href="{{ route('himanabi.account',['id' => Auth::user()->id]) }}" name="accountid" class="nav-link"><i class="fas fa-user-edit"></i>{{ Auth::user()->name }}さんの情報管理</a>
                      {{-- </form> --}}
                      @endif
                    </li>

                    <li class="nav-item">
                        <a href="{{ Auth::logout() }}" class="nav-link"><i class="fas fa-sign-out-alt"></i>ログアウト</a>
                    </li>
                @endguest
            </ul>
            </div>
    </nav>
</form>


 <!-- Modal -->
<form class="form-signin" method="POST" action="{{ route('himanabi.index') }}">
{{-- <form class="form-signin" method="POST" action="{{ route('login') }}"> --}}
@csrf
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--./Modalcontent-->
      <div class="modal-content">
        <div class="modal-header">{{ __('Login') }}
          <h5 class="modal-title" id="loginModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--modal-body-->
        <div class="modal-body">
              <p style="margin:20px;"> <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" placeholder="Eメールアドレス" value="{{ old('email') }}" required autofocus>
              </p>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

              <p style="margin:20px;"><input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
              </p>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif



          <div>
          {{-- @if (($errors->has('email')) || ($errors->has('password'))) --}}
           {{-- <p style="margin:20px;"><button disble data-toggle="modal" data-target="#loginModal" type="button-center" class="btn btn-primary"></button></p> --}}
          {{-- @else --}}
            <p style="margin:20px;">
              <button type="button-center" class="btn btn-primary" action= "{{ route('login') }}">{{ __('Login(普段はこちら)') }}</button></p>
          {{-- @endif --}}


            <!--パスワードを忘れたときのリクエスト送信-->
            @if (Route::has('password.request'))
            <p class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</p>
            @endif
          </div>

          <div class="btn-group mb-3" role="group" aria-label="basicButtons">
            <div class="mx-auto">
              <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-square"></i> Sign in </span>
              </button>
              <button class="btn google-btn social-btn" type="button" class="btn btn-primary"><span><i class="fab fa-google"></i> Sign in </span>
              </button>
              <button class="btn twitter-btn social-btn" type="button" class="btn btn-primary"><span><i class="fab fa-twitter"></i> Sign in </span> </button>
              <p>Already have an account??</p>
            </div>
          </div>

              <a style="margin:20px;" class="btn btn-outline-primary button-center" href="{{ route('himanabi.createaccount') }}">SNSのユーザーでログインする</a>
              <a style="margin:20px;" class="btn btn-outline-primary button-center mb-5" href="{{ route('himanabi.createaccount') }}">新規にユーザー登録する</a>
 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div><!--./Modal-body-->
      </div><!--./Modalcontent-->
    </div>
  </div>
</form>
<!--./Modal-->


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

{{--   <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-3.4.1.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/chart/chart.js"></script> --}}
</body>
</html>
