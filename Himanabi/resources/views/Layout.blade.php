<!DOCTYPE html>
<html lang="ja">
<head>
<<<<<<< HEAD
	<meta charset="UTF-8">
	<title>Toppage</title>
  <link rel="stylesheet" href="/css/Layout.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href=“https://fonts.googleapis.com/css?family=Amatic+SC:700” rel=“stylesheet”>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
=======
>>>>>>> 9f20377ebe86a305db9c11c6ec028995bd3be22c

	<meta charset="UTF-8">
	<title>@yield('title')</title>

    <link rel="stylesheet" href="/css/Layout.css">{{-- りょうくん追加 --}}
    {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<<<<<<< HEAD
	 <header>
<!-- ======================================Navigation Bar================================================= -->
        <nav class="navbar navbar-expand-lg navStyle">
            <a class="brand-navbar" href="#"><img src="/img/アセット 2.png" class="ikon" alt="Responsive image" height="60px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
                <span><i class="fas fa-align-right iconStyle"></i></span>
            </button>
            <h1 class="himanabi" >H<span class = "i">i</span>manavi</h1>
             <h4 class="site">スキルと時間のマッチング総合サイト</h4>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto navList">
                    <li class="nav-item active"><a href="#" class="nav-link"><i class="fas fa-home"></i>HOME<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link"><i class="fas fa-cogs"></i>このサイトについて</a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.html" class="nav-link"><i class="fas fa-briefcase"></i>マッチングまでの流れ</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-phone" data-toggle="modal" data-target="#exampleModal"></i>ログイン</a>
                    </li>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                    <li class="nav-item">
                        <a href="about.html" class="nav-link"><i class="fas fa-users"></i>About</a>
                    </li>
                </ul>
            </div>
        </nav>
	</header>
{{-- ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーcaroucelーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー --}}
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p class="colorfilter-base">
            <img src="/img/セブ海.jpg" height="70%"  width="100%" class="d-block colorfilter-image" alt="study.jpg">
          </p>
        </div>
{{--         <div class="good">
          <img src="/img/アセット 1.png" width="500" height="220" class="fa fa-thumbs-o-up" aria-hidden="true">
        </div> --}}
        <div class="carousel-item">
         <p class="colorfilter-base">
          <img src="/img/TOP画面２.jpg" width="100%" height="70%" class="d-block colorfilter-image" alt="...">
         </p>
        </div>
{{--         <div class="good">
          <img src="/img/アセット 1.png" width="500" height="220" class="fa fa-thumbs-o-up" aria-hidden="true">
        </div> --}}
        <div class="carousel-item">
         <p class="colorfilter-base">
          <img src="/img/TOP画面.jpg" width="100%" height="70%" class="d-block colorfilter-image" alt="...">
         </p>
        </div>
        {{-- logo画像 --}}
        <div class="good">
          <img src="/img/アセット 1.png" width="500" height="220" class="fa fa-thumbs-o-up" aria-hidden="true">
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
=======
    {{-- りょうくんが書いたコードここから --}}
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href=“https://fonts.googleapis.com/css?family=Amatic+SC:700” rel=“stylesheet”>
    {{-- りょうくんが書いたコードここまで --}}
>>>>>>> 9f20377ebe86a305db9c11c6ec028995bd3be22c

    {{-- フォントオーサム --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

    @guest
    {{-- ログインしていない（ゲスト状態）場合の処理 --}}
        ゲスト（テスト中です）
    @else
    {{-- ログインしている場合の処理 --}}
        ログイン（テスト中です）
    @endguest

<!-- Navigation Bar -->
<header>
    <nav class="navbar navbar-expand-lg navStyle">
        <a class="brand-navbar" href="#"><img src="/img/アセット 2.png" class="ikon" alt="Responsive image" height="60px"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
            <span><i class="fas fa-align-right iconStyle"></i></span>
        </button>
        <h1 class="himanabi" >H<span class = "i">i</span>manabi</h1>
        <h4 class="site">スキルと時間のマッチング総合サイト</h4>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i>HOME<span class="sr-only">(current)</span></a></li>
                <li class="nav-item">
                    <a href="services.html" class="nav-link"><i class="fas fa-cogs"></i>このサイトについて</a>
                </li>
                <li class="nav-item">
                    <a href="portfolio.html" class="nav-link"><i class="fas fa-briefcase"></i>マッチングまでの流れ</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link"><i class="fas fa-phone"></i>ログイン</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link"><i class="fas fa-users"></i>About</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('contens')

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