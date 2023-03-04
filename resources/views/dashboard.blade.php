<x-app-layout>
    <section class="contents_bgc">
        <div class="container contents">
            <h2>投稿一覧</h2>
            <div class="row col-11 contents_box">
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route( 'bord.create' ) }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img2.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route( 'bord.create' ) }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img3.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route( 'bord.create' ) }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
                <div class="card col-9 col-md-5">
                    <img src="../../imgs/content_img4.jpg" class="card-img-top content_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">味噌煮込みうどん</h5>
                        <p class="card-text">正しい方法で行ったダイエットは必ず成功します。そしてその頃にはきっとあなたも過去の自分と同じように悩んでいる人を見て、アドバイスをしてあげたくなることでしょう。</p>
                        <a href="{{ route( 'bord.create' ) }}" class="btn btn-primary">コメントを書く</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">番号</th>
            <th scope="col">タイトル</th>
            <th scope="col">内容</th>
            <th scope="col">投稿日</th>
            <th scope="col">更新日</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bords as $bord)
            <tr>
                <td><a href="/edit/{{$bord->id}}">{{ $bord->id }}</a></td>
                <td>{{ $bord->title }}</td>
                <td>{{ $bord->contents }}</td>
                <td>{{ $bord->created_at }}</td>
                <td>{{ $bord->updated_at }}</td>
                <td><a href="/delete/{{$bord->id}}">x</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
