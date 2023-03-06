<x-app-layout>
    <section class="contents_bgc">
        <div class="container contents">
            <h2>投稿一覧</h2>
            <div class="row col-11 contents_box">
                @foreach ($bords as $bord)
                    <div class="card col-9 col-md-5">
                        <img src="{{ asset('storage/' . $bord->image) }}" class="card-img-top content_img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bord->title }}</h5>
                            <p class="card-text">{{ $bord->contents}}</p>
                            <div class="row col-12 edit_btn">
                                <a href="/writein/{{ $bord->id }}" class="col-3 btn btn_coment">コメント</a>
                                <a href="/edit/{{ $bord->id }}" class="col-3 btn btn_edit">編集</a>
                                <a href="/delete/{{ $bord->id }}" class="col-3 btn  btn_delete ">削除</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <p class="col-7 col-sm-10 footer_logo">Mite.Meal</p>
                <p class="col-5 col-sm-2 copy_text">© minami. 2023 portfolio.</p>
            </div>
        </div>
    </footer>
</x-app-layout>
