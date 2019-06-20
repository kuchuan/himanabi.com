<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">いいね一覧画面</h5>
        <div class="row">
            @forelse($datas as $skill)

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" onclick="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{-- {{ $user->picture }} --}}" alt="card image"></p>
                                    <p>{{ $skill->id }}</p>
                                    <h4 class="card-title">{{-- 名前--}}</h4>
                                    <p class="card-text">スキル・学びの詳細{{ $user->skills }}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                     <a href="#" class="btn-circle-fishy">いいね</a>
                                     <a href="#" class="btn-circle">📩</a>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">名前</h4>
                                    <p class="card-text">???????????????????????????????????</p>
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
        @empty
        <p>ホゲホゲ</p>
         @endforelse
         