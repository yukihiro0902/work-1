<x-guest-layout>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <p>Mite.Meal</p>
                </div>
                <div class="col-4 nav_list">
                    @if (Route::has('login'))
                        {{-- <div class=""> --}}
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">ログイン</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-6">会員登録</a>
                                @endif
                            @endauth
                        {{-- </div> --}}
                    @endif
                </div>
            </div>
        </div>
    </header>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="top_wrapper">
        <div class="container px-5">
            <div class="row">
                <p class="col-sm-6 top_sub">みんなで目指そう</p>
            </div>
            <div class="row">
                <h1 class="col-sm-9 top_title">理想な身体<br>理想の<span>あなた</span>へ</h1>
            </div>
            <div class="row">
                <p class="col-sm-9 top_text">今度こそダイエットに成功してなりたい自分になりませんか？
                <br>ここではみんなが貴方の食事内容をサポートしてくれます。</p>
            </div>
            <div class="row">
                @if (Route::has('login'))
                    <div class="contact_form">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-6">会員登録</a>
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
            <div class="col-10 col-md-4"><img src="../../imgs/info_img.jpg" class="info_img"></div>
            <div class="col-10 col-md-6"><p class="info_text mt-4">「ダイエットしてスタイルを良くしたい」、「減量してカッコいい身体を作りたい」。でも何を食べたら痩せるのか、逆に何を食べたら太るのか分からない。野菜しか食べてないのに全然体重が変わらない。そう思ったことはありませんか？ダイエットをすることは決して楽なことではないので、どうせやるなら一日でも早く結果を出したいですよね？</div>
        </div>
        <div class="row">
            <div class="col-10 info_title"><h2>あなたの普段の食事を投稿するだけで、ダイエットに最適な指摘やアドバイスが貰えます。</h2></div>
            <div class="col-10 col-md-6"><p class="info_text">ダイエットに成功してる人や普段から食事管理を徹底している人たちは、痩せるための知識やノウハウをたくさん持っています。そしてその方達から見れば、間違った方法でダイエットをしているあなたを見ると、「もっとこうした方が良いよ」「こういった物も食べたほうが良いよ」と言いたくなるのです。絶対に結果を出したいのなら、すでに成功している人に聞くのが一番の近道なので、どんどん写真を投稿してアドバイスをたくさんもらいましょう</div>
            <div class="col-10 col-md-4"><img src="../../imgs/info_img2.jpg" class="info_img"></div>
        </div>
        <div class="row">
            <div class="col-10 info_title"><h2>無事ダイエットに成功したら、次はあなたがアドバイスをする側に</h2></div>
            <div class="col-10 col-md-4"><img src="../../imgs/info_img3.jpg" class="info_img"></div>
            <div class="col-10 col-md-6"><p class="info_text mt-4">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。あなたがダイエットを通して得た知識やノウハウ、成功したことで得ることのできた体験などをたくさんの方達に教えてあげてください。そうしてこのサイトを訪れた会員の皆様全員が幸せになれる場所にしていきましょう</div>
        </div>
    </div>

    <section class="contents_wrapper">
        <div class="container contents">
            <h2>投稿一覧</h2>
            <div class="row col-11">
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img.jpg" class="content_img">
                    <div class="content_body">
                        <h5 class="content_title">鮭のレモンバター蒸し</h5>
                        <p class="content_text"></p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img2.jpg" class="content_img">
                    <div class="content_body">
                        <h5 class="content_title">味噌煮込みうどん</h5>
                        <p class="content_text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img3.jpg" class="content_img">
                    <div class="content_body">
                        <h5 class="content_title">味噌煮込みうどん</h5>
                        <p class="content_text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img4.jpg" class="content_img">
                    <div class="content_body">
                        <h5 class="content_title">味噌煮込みうどん</h5>
                        <p class="content_text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container about">
        <div class="row">
            <div class="col-md-2">
                <img src="../../imgs/about_img.jpg">
            </div>
            <div class="col-md-2 about_article">
                <p>Yukihiro Minami</p>
                <h3>南  幸宏</h3>
            </div>
            <div class="col-md-7 px-5 about_text">
                <p>愛媛県出身の29歳。20歳で名古屋に引っ越して訪問営業を経験し新人賞を取った経験があります。
                <br>また2年ほどフィットネスジムでのトレーナー経験もありますので、対面でのコミュニケーションには自信があります。
                <br>昔から頭で考えた事を形にしたり、作品を作り上げることが好きです。
                <br>持ち前の明るさを活かしながら頑張ります。</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <hr>
            <div class="row">
                <p class="col-7 col-sm-10 footer_logo">Mite.Meal</p>
                <p class="col-5 col-sm-2 copy_text">© minami. 2023 portfolio.</p>
            </div>
        </div>
    </footer>
</x-guest-layout>
