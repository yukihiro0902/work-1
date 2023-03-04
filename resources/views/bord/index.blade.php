<x-guest-layout>
    <header>
        <div class="container">
            <div class=" nav row justify-content-center">
                <div class="col-8">
                    <p>Mite.Meal</p>
                </div>
                <div class="col-4 ">
                    @if (Route::has('login'))
                        <div class="nav_list">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="login">ログイン</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="register ml-6">会員登録</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="bg_img">
        <div class="container px-5">
            <div class="row">
                <p class="col-sm-6 top_sub_title">みんなで目指そう</p>
            </div>
            <div class="row">
                <h1 class="col-sm-9 top_title">理想な身体<br>理想の<span>あなた</span>へ</h1>
            </div>
            <div class="row">
                <p class="col-sm-9 top_text">今度こそダイエットに成功してなりたい自分になりませんか？
                <br>ここではみんなが貴方の食事内容をサポートしてくれます。
                </p>
            </div>
            <div class="row row-cols-auto">
                @if (Route::has('login'))
                    <div class="contact_form">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="mx-right-5 login">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="register ml-6">会員登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div class="container info">
        <div class="row">
            <div class="col-10 info_title"><h2>ダイエットしてるけど全然体重が減らない。今の食事で本当に痩せるの？</h2></div>
            <div class="col-10 col-md-4 col-sm-auto"><img src="../../imgs/info_img.jpg" class="img-responsive" alt=""></div>
            <div class="col-10 col-md-6"><p class="info_text">「ダイエットしてスタイルを良くしたい」、「減量してカッコいい身体を作りたい」。でも何を食べたら痩せるのか、逆に何を食べたら太るのか分からない。野菜しか食べてないのに全然体重が変わらない。そう思ったことはありませんか？ダイエットをすることは決して楽なことではないので、どうせやるなら一日でも早く結果を出したいですよね？</div>
        </div>
        <div class="row">
            <div class="col-10 info_title"><h2>あなたの普段の食事を投稿するだけで、ダイエットに最適な指摘やアドバイスが貰えます。</h2></div>
            <div class="col-10 col-md-6"><p class="info_text">ダイエットに成功してる人や普段から食事管理を徹底している人たちは、痩せるための知識やノウハウをたくさん持っています。そしてその方達から見れば、間違った方法でダイエットをしているあなたを見ると、「もっとこうした方が良いよ」「こういった物も食べたほうが良いよ」と言いたくなるのです。絶対に結果を出したいのなら、すでに成功している人に聞くのが一番の近道なので、どんどん写真を投稿してアドバイスをたくさんもらいましょう</div>
            <div class="col-10 col-md-4 col-sm-auto"><img src="../../imgs/info_img2.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="row">
            <div class="col-10 info_title"><h2>無事ダイエットに成功したら、次はあなたがアドバイスをする側に</h2></div>
            <div class="col-10 col-md-4 col-sm-auto"><img src="../../imgs/info_img3.jpg" class="img-responsive" alt=""></div>
            <div class="col-10 col-md-6"><p class="info_text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。あなたがダイエットを通して得た知識やノウハウ、成功したことで得ることのできた体験などをたくさんの方達に教えてあげてください。そうしてこのサイトを訪れた会員の皆様全員が幸せになれる場所にしていきましょう</div>
        </div>
    </div>

    <section class="contents_bgc">
        <div class="container contents">
            <h2>投稿一覧</h2>
            <div class="row col-11 contents_box">
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img2.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img3.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img4.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container about">
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="../../imgs/about_img.jpg" alt="">
            </div>
            <div class="col-12 col-md-2 about_article">
                <div class="col-12">
                    <p>Yukihiro Minami</p>
                </div>
                <div class="col-12">
                    <h3>南  幸宏</h3>
                </div>
            </div>
            <div class="col-12 col-md-7 px-5 about_text">
                <p>愛媛県松山市出身の29歳。</p>
            </div>
        </div>
    </div>

    <footer>
        
    </footer>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">番号</th>
            <th scope="col">タイトル</th>
            <th scope="col">内容</th>
            <th scope="col">投稿日</th>
            <th scope="col">更新日</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bords as $bord)
            <tr>
                <td>{{ $bord->id }}</td>
                <td>{{ $bord->title }}</td>
                <td>{{ $bord->contents }}</td>
                <td>{{ $bord->created_at }}</td>
                <td>{{ $bord->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-guest-layout>
