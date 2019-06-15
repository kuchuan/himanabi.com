@extends('layout')

@section('title')
いいね一覧画面
@endsection

@section('mystyle')
<script type="text/javascript" src="assets/js/description.js"></script>
<link rel="stylesheet" type="text/css" href="css/description.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

@endsection


@section('content')

<section class="our-blog p-0 m-0 bg-silver">
    <div class="container work-process  pb-5 pt-5">
        <div class="title mb-5 text-center">
        <h3>マッチング <span class="site-color">までの流れ</span></h3>
    </div>
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Make Account</h5>
                            <p><small>まずはアカウントを作成してみよう！<br>
                            最初に気になるジャンルをチェック<br>しておくとおすすめに表記されます！</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lesrning?</h5>
                            <p><small>登録が終わったら<br>
                            	早速気になるor提供できるスキルを<br>検索または投稿してみよう！ </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Push IINE!</h5>
                            <p><small>興味のある投稿を発見したら<br>
                            カードの左下にあるいいねボタンを<br>
                          押してお気に入りに追加しちゃおう！</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Contact</h5>
                            <p><small>興味のあるスキルをお気に入りにしたら<br>
                            	カード右下に表示されている📩を押して<br>
                            直接連絡を取ってみましょう！</small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>
            
            
        </div>
        <!-- ============ step 5 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">05</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Let's Meet</h5>
                            <p><small>コンタクトの段階で詳細やどんなシェアができるのかが決まったら、<br>
                            	日程、時間、場所を決めて、<br>
                            	実際にシェアリングをしにいこう！
                            </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right process-last"></div>
            </div>
        </div>
        <!-- ============ -->
    </div>
</section>
	<script>
  AOS.init();
</script>

@endsection